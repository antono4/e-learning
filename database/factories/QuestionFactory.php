<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lesson_id'         => rand(1,9),
            'question'          => $this->faker->sentence(2),
            'a'                 => $this->faker->word(),
            'b'                 => $this->faker->word(),
            'c'                 => $this->faker->word(),
            'd'                 => $this->faker->word(),
            'e'                 => $this->faker->word(),
            'correct'           => $this->faker->word(),
        ];
    }
}
