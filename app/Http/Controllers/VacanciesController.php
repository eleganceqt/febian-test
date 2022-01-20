<?php


namespace App\Http\Controllers;


use Inertia\Inertia;
use App\Models\Vacancy;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class VacanciesController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Vacancies');
    }

    /**
     * @param \App\Models\Vacancy $vacancy
     *
     * @return \Inertia\Response
     */
    public function show(Vacancy $vacancy)
    {
        $candidates = Candidate:: query()
            ->whereFullText(['address', 'education', 'work', 'experience'], $keywords = sprintf('%s %s', $vacancy->location, $vacancy->title))
            ->orderByRaw('match(`address`, `education`, `work`, `experience`) against(? in natural language mode) desc', [$keywords])
            ->limit(5)
            ->get();

        return Inertia::render('Vacancy', [
            'vacancy' => $vacancy->setAttribute('candidates', $candidates)
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request): JsonResponse
    {
        $vacancies = Vacancy::whereFullText(['company', 'title', 'location'], $request->input('query'))->get();

        return response()->json($vacancies);
    }
}
