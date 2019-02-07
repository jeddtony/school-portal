<?php

namespace App\Http\Controllers;

use App\Studentclass;
use App\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
        $subjects = auth()->user()->subjects()->get();
//        dd($subjects);
        $matchJssOne = ['level' => 1, 'category' => 'junior'];
        $matchJssTwo = ['level' => 2, 'category' => 'junior'];
        $matchJssThree = ['level' => 3, 'category' => 'junior'];
        $matchSciences = ['name' => 'science', 'category' => 'senior'];
        $matchCommercials = ['name' => 'commercial', 'category' => 'senior'];
        $matchArts = ['name' => 'arts', 'category' => 'senior'];
        $jssOnes = Studentclass::where($matchJssOne)->get();
        $jssTwos = Studentclass::where($matchJssTwo)->get();
        $jssThrees = Studentclass::where($matchJssThree)->get();
        $sciences = Studentclass::where($matchSciences)->get();
        $commercials = Studentclass::where($matchCommercials)->get();
        $arts = Studentclass::where($matchArts)->get();
        return view('teacher.dashboard', compact('subjects',
            'jssOnes', 'jssTwos', 'jssThrees', 'sciences', 'commercials', 'arts'));
    }

    public function show(Subject $subject){
        if($subject->category == 'junior'){
            $matchJssOne = ['level' => 1, 'category' => 'junior'];
            $matchJssTwo = ['level' => 2, 'category' => 'junior'];
            $matchJssThree = ['level' => 3, 'category' => 'junior'];
            $jssOnes = Studentclass::where($matchJssOne)->get();
            $jssTwos = Studentclass::where($matchJssTwo)->get();
            $jssThrees = Studentclass::where($matchJssThree)->get();
            return view('teacher.subject',
                compact('subject', 'jssOnes', 'jssTwos', 'jssThrees'));
        }
        else{
            if($subject->science && $subject->commercial && $subject->arts){
                $matchSciences = ['name' => 'science', 'category' => 'senior'];
                $matchCommercials = ['name' => 'commercial', 'category' => 'senior'];
                $matchArts = ['name' => 'arts', 'category' => 'senior'];
                $sciences = Studentclass::where($matchSciences)->get();
                $commercials = Studentclass::where($matchCommercials)->get();
                $arts = Studentclass::where($matchArts)->get();
                return view('teacher.subject',
                    compact('subject', 'sciences', 'commercials', 'arts'));
            }
            elseif($subject->commercial && $subject->arts){
                $matchCommercials = ['name' => 'commercial', 'category' => 'senior'];
                $matchArts = ['name' => 'arts', 'category' => 'senior'];
                $commercials = Studentclass::where($matchCommercials)->get();
                $arts = Studentclass::where($matchArts)->get();
                return view('teacher.subject',
                    compact('subject', 'sciences', 'commercials', 'arts'));
            }
            elseif($subject->science){
                $matchSciences = ['name' => 'science', 'category' => 'senior'];
                $sciences = Studentclass::where($matchSciences)->get();
                return view('teacher.subject',
                    compact('subject', 'sciences'));
            }
            elseif ($subject->commercial){
                $matchCommercials = ['name' => 'commercial', 'category' => 'senior'];
                $commercials = Studentclass::where($matchCommercials)->get();
                return view('teacher.subject',
                    compact('subject',  'commercials'));
            }
            else{
                $matchArts = ['name' => 'arts', 'category' => 'senior'];
                $arts = Studentclass::where($matchArts)->get();
                return view('teacher.subject',
                    compact('subject',  'arts'));
            }
        }
    }
}
