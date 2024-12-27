<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    public function definition(): array
    {  
        $db_careers_id = Career::select(['id'])->get()->toArray();
        $careers_id = [];
        foreach($db_careers_id as $career){
            array_push($careers_id,$career['id']);
        }
        return [
            'name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->email(),
            'document'=>$this->faker->unique()->randomNumber(9),
            'career_id'=>$this->faker->randomElement($careers_id),
        ];
    }
}
