<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
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
        return view('admin.createSubject');
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
//        dd($request);
        $storeArray = $this->getArrayToStore($request);
        Subject::create($storeArray);
//        dd('It has been stored');
//        return back('status', ''.$request->subjectName.' created successfully');
        return redirect('/create/subject')->with('status', ''.$request->subjectName . ' created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }

    private function getArrayToStore($request){
        $returnArray = array();
        if($request->category == 'senior'){
           $returnArray['name'] = $request->subjectName;
           $returnArray['category'] = $request->category;
           if(array_key_exists(0, $request->speciality) && $request->speciality[0] == 'science'){
               $returnArray['science'] = 1;
               if(array_key_exists(1, $request->speciality) && $request->speciality[1] == 'commercial'){
                   $returnArray['commercial'] = 1;
               }
               if(array_key_exists(2, $request->speciality) && $request->speciality[2] == 'arts'){
                   $returnArray['arts'] = 1;
               }
           }
            if(array_key_exists(0, $request->speciality) && $request->speciality[0] == 'commercial'){
                $returnArray['commercial'] = 1;
            }
            if(array_key_exists(0, $request->speciality) && $request->speciality[0] == 'arts'){
                $returnArray['arts'] = 1;
            }

            if(array_key_exists(1, $request->speciality) && $request->speciality[1] == 'arts'){
                $returnArray['arts'] = 1;
            }

        }
        else{
            $returnArray['name'] = $request->subjectName;
            $returnArray['category'] = $request->category;
        }
        return $returnArray;
    }
}
