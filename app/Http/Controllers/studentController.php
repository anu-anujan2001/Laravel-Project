<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function index(){
        return view('studentreg');
    }

    public function addStudent(Request $request)
    {
       // dd($request->all());
       Student::create($request->all());
       return redirect()->route('Home')->with('message','Student created successfully!');
    }
}
