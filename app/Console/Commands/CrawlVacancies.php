<?php

namespace App\Console\Commands;

use App\Models\Vacancy;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class CrawlVacancies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:vacancies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl vacancies from endpoint.';

    /**
     * @var string
     */
    protected string $uri = 'https://www.bestjobs.eu/ro/locuri-de-munca?location=bucuresti&keyword=symfony';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Vacancy::insert(
            $this
                ->crawler()
                ->filter('div.job-card')
                ->each(fn(Crawler $node) => [
                    'company' => $node->filter('h3.h6 > small')->text(),
                    'title' => $node->filter('h2.h6 > strong')->text(),
                    'location' => $node->filter('div.card-footer span.stretched-link-exception')->text()
                ])
        );
    }

    /**
     * @return \Symfony\Component\DomCrawler\Crawler
     */
    public function crawler(): Crawler
    {
        return new Crawler(Http::get($this->uri)->body());
    }
}
