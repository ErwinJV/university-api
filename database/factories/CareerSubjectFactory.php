<?php

namespace Database\Factories;

use App\Models\Career;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CareerSubject>
 */
class CareerSubjectFactory extends Factory
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

        $db_subjects_id = Subject::select(['id'])->get()->toArray();
        $subjects_id = [];
        foreach($db_subjects_id as $subject){
           $subjects_id = [...$subjects_id,$subject['id']];
        }
        return [
            'career_id'=>$this->faker->randomElement($careers_id),
            'subject_id'=>$this->faker->randomElement($subjects_id),
        ];
    }
}
