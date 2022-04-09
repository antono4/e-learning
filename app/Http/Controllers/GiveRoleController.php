<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiveRoleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        auth()->user()->assignRole('student');
        return redirect()->route('student.dashboard');
    }
}
