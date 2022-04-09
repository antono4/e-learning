<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckRoleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if(auth()->user()->hasRole('admin')){
            return 'admin';
        } elseif(auth()->user()->hasRole('teacher')){
            return redirect()->route('teacher.dashboard');
        } elseif(auth()->user()->hasRole('student')){
            return redirect()->route('student.dashboard');;
        } else{
            return abort(404);
        }
    }
}
