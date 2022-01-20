<?php

namespace Database\Factories;

use App\Models\Candidate;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Candidate::class;

    /**
     * @var array
     */
    protected array $experience = [
        'PHP Developer',
        'Senior PHP Developer',
        'Middle PHP Developer',
        'Junior PHP Developer',
        'PHP Internship',
        'PHP Fullstack Developer'
    ];

    /**
     * @var array
     */
    protected array $address = [
        'Bucuresti',
        'București',
        'Bucharest',
        'Bucuresti, Ilfov',
        'Cluj',
        'Cluj-Napoca',
        'Chisinau',
        'Chișinău'
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => Arr::random($this->address),
            'education' => $this->faker->sentence(10),
            'work' => $this->faker->company(),
            'experience' => Arr::random($this->experience),
        ];
    }
}
