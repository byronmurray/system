<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$search = \Request::get('search');

    	$processes = Process::where('title','like','%'.$search.'%')->orderBy('title')->get();

        return view('search.index', compact('processes'));
    }

}
