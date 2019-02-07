<?php

namespace App\Http\Controllers;

use App\Student;
use App\Studentclass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $studentClasses = Studentclass::all();
        $matchJssOne = ['level' => 1, 'category' => 'junior'];
        $matchJssTwo = ['level' => 2, 'category' => 'junior'];
        $matchJssThree = ['level' => 3, 'category' => 'junior'];
        $matchSsOne = ['level' => 1, 'category' => 'senior'];
        $matchSsTwo = ['level'=> 2, 'category' => 'senior'];
        $matchSsThree = ['level' => 3, 'category' => 'senior'];
        $jssOnes = Studentclass::where($matchJssOne)->get();
        $jssTwos = Studentclass::where($matchJssTwo)->get();
        $jssThrees = Studentclass::where($matchJssThree)->get();
        $ssOnes = Studentclass::where($matchSsOne)->get();
        $ssTwos = Studentclass::where($matchSsTwo)->get();
        $ssThrees = Studentclass::where($matchSsThree)->get();

        return view('admin.createStudent',
            compact('jssOnes', 'jssTwos', 'jssThrees', 'ssOnes', 'ssTwos', 'ssThrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd($request->studentclass);
        Student::create([
            'name' => $request->name,
            'studentclass_id'=> $request->studentclass,
        ]);
        return redirect('/create/student')->with('status', 'Student Record Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
