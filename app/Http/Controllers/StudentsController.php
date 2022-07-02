<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\StudentDetails;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $students_data = students::all();

        return view('students.index',compact('students_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = students::create([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
      

        $students->StudentDetail()->create([
          
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_number' => $request->roll_number,


        ]);


       return redirect('students')->with('message', 'Stored succrssfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        //  $students= StudentDetails::find($id);
        //  $students['students'] = students::all();
        //  $students['student_details'] = StudentDetails::all();
      
        return view('students.edit',compact('students'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(students $students, Request $request)
    {
        $students = students::update([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
      

        $students->StudentDetail()->update([
          
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_number' => $request->roll_number,


        ]);


       return redirect('students')->with('message', 'updated succrssfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
       $students ->delete();
       return redirect('students')->with('message', 'deleted succrssfully');
    }




    public function details($student_id){
        $students = students::findOrFail($student_id)->StudentDetail;
        return view('student.details', compact('students'));
    }


    public function updatedetails(students $request ,$student_id){
        $students = students::findOrFail($student_id);
      
      

        $students->StudentDetail()-> updateOrCreate
        (

            [
                'student_id' => $student_id,
            ],
            
            [
          
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_number' => $request->roll_number,


        ]
    
    );


       return redirect('students')->with('message', 'updated succrssfully');
    }

}
