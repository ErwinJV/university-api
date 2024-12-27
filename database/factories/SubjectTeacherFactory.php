<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubjectTeacher>
 */
class SubjectTeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {  
        $db_subjects = Subject::select(['id'])->get()->toArray();
        $subjects_id = [];
        foreach($db_subjects as $subject){
            $subjects_id = [...$subjects_id,$subject['id']];
        }

        $db_teachers = Teacher::select(['id'])->get()->toArray();
        $teachers_id = [];
        foreach($db_teachers as $teacher){
            $teachers_id = [...$teachers_id,$teacher['id']];
        }
        return [
            'subject_id'=>$this->faker->randomElement($subjects_id),
            'teacher_id'=>$this->faker->randomElement($teachers_id),
        ];
    }
}
