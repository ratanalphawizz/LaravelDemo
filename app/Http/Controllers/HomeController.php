<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index',compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }
}
