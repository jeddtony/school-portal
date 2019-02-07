<?php

namespace App\Http\Controllers;

use App\Secondterm;
use App\Student;
use App\Studentclass;
use App\Subject;
use Illuminate\Http\Request;

class SecondtermController extends Controller
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
        //
        // First we find out if any record has been entered before
        $matchThis = ['subject_id' => $subject_id, 'studentclass_id' => $studentclass_id];
        $records = Secondterm::where($matchThis)->get();
        $subject = Subject::find($subject_id);
        $studentclass = Studentclass::find($studentclass_id);


        // If yes we return the records entered previously
        if(count($records) > 0){
//            dd($records);
            $recordExist = true;
            return view('teacher.record', compact('records', 'subject', 'studentclass', 'recordExist'));
        }
        // else we return all the students in that class
        else{
            $records = Student::where('studentclass_id', $studentclass_id)->get();
//            dd($records);
            $recordExist = false;
            return view('teacher.record', compact('records', 'subject', 'studentclass', 'recordExist'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($subject_id, $studentclass, Request $request)
    {
        //
        for ($counter = 0; $counter < count($request->studentid); $counter++){

            Secondterm::create([
                'student_id' => $request->studentid[$counter],
                'subject_id' => $subject_id,
                'studentclass_id' => $studentclass,
                'assessment' => $request->assessment[$counter],
                'exam' => $request->exam[$counter],
                'total' => $request->assessment[$counter] + $request->exam[$counter],
                'comment' => (($request->assessment[$counter] + $request->exam[$counter]) > 50? 'pass': 'fail'),
            ]);
         }
         return redirect('/dashboard')->with('status', 'Record created successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Secondterm  $secondterm
     * @return \Illuminate\Http\Response
     */
    public function show(Secondterm $secondterm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secondterm  $secondterm
     * @return \Illuminate\Http\Response
     */
    public function edit(Secondterm $secondterm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secondterm  $secondterm
     * @return \Illuminate\Http\Response
     */
    public function update($subject_id, Request $request, Secondterm $secondterm)
    {
        //
        for ($counter = 0; $counter < count($request->studentid); $counter++){
            $matchThis = ['subject_id' => $subject_id, 'student_id' => $request->studentid];
            $secondterm = Secondterm::where($matchThis)->first();
//            dd($request->assessment[$counter]);
            $secondterm->assessment = $request->assessment[$counter];
            $secondterm->exam = $request->exam[$counter];
            $secondterm->total = $request->assessment[$counter] + $request->exam[$counter];
            $secondterm->comment = (($request->assessment[$counter] + $request->exam[$counter]) > 50? 'pass': 'fail');
            $secondterm->save();
        }
        return redirect('/dashboard')->with('status', 'Record edited successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secondterm  $secondterm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secondterm $secondterm)
    {
        //
    }
}
