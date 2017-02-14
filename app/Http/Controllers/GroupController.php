<?php

namespace App\Http\Controllers;

use App\Group;
use App\Process;
use Illuminate\Http\Request;

class GroupController extends Controller
{
   	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePovit(Request $request, Process $process)
    {


        $process->groups()->attach($request->group_id);

        Session()->flash('status', 'Process has been added to the Group!');

        return back();
    }
}
