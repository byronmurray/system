<?php

namespace App\Http\Controllers;

use Auth;
use App\Group;
use App\Process;
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

        $this->validate(request(), [
            'title' => 'required|min:3|unique:processes'
        ]);

        $process = new Process;
        $process->user_id = Auth::user()->id;
        $process->title = $request->title;
        $process->slug = clean($request->title);
        $process->save();

        Session()->flash('status', 'New Process has been created!');

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
        function clean($string) {
           
           $string = strtolower($string);
           $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
           return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        }

        $this->validate(request(), [
            'title' => 'required|min:3|unique:groups'
        ]);

        $group = new Group;
        $group->title = $request->title;
        $group->slug = clean($request->title);
        $group->save();

        Session()->flash('status', 'New Group has been created!');

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePovit(Request $request, Group $group)
    {

        $group->processes()->attach($request->process_id);

        Session()->flash('status', 'Processes have been assigned!');

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

        // get an array of procedures currently that belong to the process
        $array = $process->procedures->pluck('id');
        // get all procedures except those in the array
        $proceduresList = Procedure::whereNotIn('id', $array)->get();
    
        return view('processes.show', compact('process', 'proceduresList', 'processes' ));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGroupProcesses($slug)
    {
        $group = Group::where('slug', $slug)->first();

        $groups = Group::all();

        $processes = $group->processes;

        // get an array of processes currently that belong to the group
        $array = $group->processes->pluck('id');
        // get all groups except those in the array
        $processList = Process::whereNotIn('id', $array)->get();

        return view('groups.show', compact('groups', 'group', 'processes', 'processList'));
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
