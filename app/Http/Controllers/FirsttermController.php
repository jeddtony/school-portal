<?php

namespace App\Http\Controllers;

use App\Firstterm;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FirsttermController extends Controller
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
    public function create($subject_id, $studentclass_id)
    {
        // First we find out if any record has been entered before
        $matchThis = ['subject_id' => $subject_id, 'studentclass_id' => $studentclass_id];
        $records = Firstterm::where($matchThis)->get();

        // If yes we return the records entered previously
        if($records){
            return view('teacher.record', compact('records', 'subject_id', 'studentclass_id'));
        }
        // else we return all the students in that class
        else{
            $records = Student::where('studentclass_id', $studentclass_id)->get();
            return view('teacher.record', compact('records', 'subject_id', 'studentclass_id'));
        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Firstterm  $firstterm
     * @return \Illuminate\Http\Response
     */
    public function show(Firstterm $firstterm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Firstterm  $firstterm
     * @return \Illuminate\Http\Response
     */
    public function edit(Firstterm $firstterm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Firstterm  $firstterm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firstterm $firstterm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Firstterm  $firstterm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firstterm $firstterm)
    {
        //
    }
}
