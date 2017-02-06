<?php

namespace App\Http\Controllers;

use App\Step;
use Auth;
use App\Procedure;
use Illuminate\Http\Request;

class StepController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Procedure $procedure)
    {

        //return $request->all();

        $this->validate(request(), [
            'title' => 'required|min:3|unique:steps',
            'body'  => 'required'
        ]);

        $step = new Step;
        $step->procedure_id = $procedure->id;
        $step->user_id = Auth::user()->id;
        $step->title = $request->title;
        $step->body = $request->body;
        $step->save();

        Session()->flash('status', 'New step has been created!');

        return back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Step $step)
    {
        
        $step->update($request->all());

        Session()->flash('status', 'Step has been updated!');


        return back();
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
