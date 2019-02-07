<?php

namespace App\Http\Controllers;

use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('is_admin');
    }

    public function create(){
        $subjects = Subject::all();
        return view('admin.createTeacher', compact('subjects'));
    }

    public function store(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => User::DEFAULT_TYPE,
        ]);

        $subjects = $request->subject;
        foreach ($subjects as $subject)
        $user->subjects()->attach($subject);
        return redirect('/create/teacher')->with('status', ''. $request->name . ' has been created successfully');
    }
}
