<?php

namespace App\Http\Controllers;

use Auth;
use App\Process;
use App\Procedure;
use Illuminate\Http\Request;


class ProcedureController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $process)
    {

        function clean($string) {
           
           $string = strtolower($string);
           $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
           return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        }

        $this->validate(request(), [
            'title' => 'required|min:3|unique:procedures',
        ]);

        $procedure = new procedure;
        $procedure->user_id = Auth::user()->id;
        $procedure->title = $request->title;
        $procedure->slug = clean($request->title);
        $procedure->save();


        $procedure->processes()->attach($process);

        Session()->flash('status', 'New Procedure has been created!');

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
        $process->procedures()->attach($request->procedure_id);

        Session()->flash('status', 'Procedures have been assigned to the process!');

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
        $procedure = Procedure::where('slug', $slug)->first();

        if ($_GET['id'] != 0) {
            $process = Process::find($_GET['id']);
        } else {
            $process = null;
        }


        

        return view('procedures.show', compact('procedure', 'process'));
    }

}
