<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('id','desc')->get();
        return response()->json($students,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $json = json_decode(file_get_contents('php://input'),true);
        //echo $request->name;
        if(!is_array($json)){
            $array = [
                'response'=>[
                    'status'=>'Bad request',
                    'message'=>'Invalid request - Empty data'
                ]
            ];
            return response()->json($array,400);
        }

         $student = new Student();
         $student->name = $request->name;
         $student->last_name = $request->last_name;
         $student->email = $request->email;
         $student->document = $request->document;
         $student->career_id = $request->career_id;
         $student->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::where(['id'=>$id])->firstOrFail();
        $subject_notes = Student::find($id)->subject_notes()->get();
        return response()->json(['student'=>$student,'notes'=>$subject_notes],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $json = json_decode(file_get_contents('php://input'),true);
        //echo $request->name;
        if(!is_array($json)){
            $array = [
                'response'=>[
                    'status'=>'Bad request',
                    'message'=>'Invalid request - Empty data'
                ]
            ];
            return response()->json($array,400);
        }

        $student = Student::where(['id'=>$id])->firstOrFail();
        $student->name = $request->input('name') ?? $student->name;
        $student->last_name = $request->input('last_name') ?? $student->last_name;
        $student->email = $request->input('email') ?? $student->email;
        $student->document = $request->document ?? $student->document;
        $student->career = $request->career ?? $student->career;

        $student->save();

        return response()->json($student,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::where(['id'=>$id])->firstOrFail();
        if($student->count()){
            $student::where(['id'=>$id])->delete();
            $array = [
                'response'=>[
                    'status'=>'OK',
                    'message'=>'The row has been deleted'
                ]
            ];

            return response()->json($array,200);
        }else{
            $array = [
                'response'=>[
                    'status'=>'Not Found',
                    'message'=>"The row not exists"
                ]
            ];

            return response()->json($array,404);
        }
    }
}
