<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FaqsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     *
     */

    protected $model = Faqs::class;
    public function definition()
    {

            return [
                'question' => $this->faker->title,
                'answer' => $this->faker->text,
            ];

    }
}
