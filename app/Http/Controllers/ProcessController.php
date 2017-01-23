<?php

namespace App\Http\Controllers;

use App\Process;
use App\Group;
use App\procedure;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::orderBy('title', 'ASC')->get();

        $processes = Process::orderBy('title', 'ASC')->get();
        return view('processes.index', compact('processes', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        function clean($string) {
           
           $string = strtolower($string);
           $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
           return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        }

        $process = new process;
        $process->title = $request->title;
        $process->slug = clean($request->title);
        $process->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeGroup(Request $request)
    {
        
        $group = new Group;
        $group->title = $request->title;
        $group->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePovit(Request $request, Process $process)
    {
        //$procedure->processes()->attach($process);
        $process->groups()->attach($request->group_id);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $process = Process::where('slug', $slug)->first();

        /*load all the processes in the sidebar*/
        $processes = Process::orderBy('title', 'ASC')->get();

        // get an array of groups currently that belong to the process
        $array = $process->groups->pluck('id');
        // get all groups except those in the array
        $groupsList = Group::whereNotIn('id', $array)->get();

        // get an array of procedures currently that belong to the process
        $array = $process->procedures->pluck('id');
        // get all procedures except those in the array
        $proceduresList = Procedure::whereNotIn('id', $array)->get();
    
        return view('processes.show', compact('process', 'proceduresList', 'processes', 'groupsList' ));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGroupProcesses(Group $group)
    {
        $groups = Group::all();

        $processes = $group->processes;

        return view('groups.show', compact('groups', 'group', 'processes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
