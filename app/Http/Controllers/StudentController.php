<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Students;

class StudentController extends Controller
{
    public function index(){
        $students_lists = Students::latest()->paginate(5);
        //dd($students_lists);
        return view('students.index', compact('students_lists'));
        
    }

    public function store(Request $request){
        //  $validator = Validator::make($request->all(),[
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //  ])->validate();
        //dd($request->all());

        Students::create($request->all());
        return redirect()->route('students_data.index')->with('success', 'new student data created successfully');
    }

    public function show($id)
    {
        $students_lists = Students::find($id);
        if($students_lists)
            return view('students.index', compact('students_lists'));
    }

    public function edit($id){
        $students_lists = Students::find($id);
        return view('students.edit',compact('students_lists'));

    }

    public function destroy($id){
        $students_lists = Students::find($id);
        $students_lists->delete($id);
        return redirect()->route('students_data.index')
        ->with('success', 'Student Data deleted successfully');
}
}

