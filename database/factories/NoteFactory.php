<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $db_students = Student::select(['id'])->get()->toArray();
        $students_id = [];
        foreach($db_students as $student){
          array_push($students_id,$student['id']);
        }

        $db_subjects = Subject::select(['id'])->get()->toArray();
        $subjects_id = [];
        foreach($db_subjects as $subject){
           array_push($subjects_id,$subject['id']);
        }
        return [
            'note'=>$this->faker->randomNumber(2),
            'student_id'=>$this->faker->randomElement($students_id),
            'subject_id'=>$this->faker->randomElement($subjects_id)
        ];
    }
}
