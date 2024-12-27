<?php

namespace Database\Factories;

use App\Models\Career;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
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
           $careers_id = [...$careers_id,$career['id']];
        }
        return [
            'name'=>$this->faker->sentence(1),
            'career_id'=>$this->faker->randomElement($careers_id)
        ];
    }
}
