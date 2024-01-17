<?php

namespace App\Http\Controllers;

use App\Models\Instructions;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index'); 
    }
    public function instructions()
    {  
        $instructions = Instructions::all();
       return view('index')->with('instructions', $instructions);
      

    }
   /* 
    public function courses(Courses $courses)
    {  
        $courses = Courses::all();
        return view('forms.edit_user')->with('courses', $courses);
  
    }
    public function academics(Academics $academics)
    {  
        $academics = Academics::all();
        return view('forms.edit_user')->with('academics', $academics);

    }
  */





}
