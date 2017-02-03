@extends('layouts.app')

@section('sidebar')

    @include('sidebars.processes')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Process - {{$process->title}} <small><em>Created by {{ $process->user->name }}  {{ $process->created_at->diffForHumans() }}</em></small></div>

        <div class="panel-body">

        @include('errors.form')

        <form action="/procedures/{{ $process->id}}" method="POST" id="add_new_procedure_form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">New Procedure</label>
                <input type="text" name="title" class="form-control" required >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-defualt" value="Add New">
            </div>
        </form>

        <form action="/procedures/{{ $process->id}}/assign" method="POST" id="assign_existing_form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">Existing Procedures</label>
                <select class="form-control" multiple="multiple" id="procedure_id" name="procedure_id[]">
              
                  @foreach($proceduresList as $procedure)
                      <option value="{{$procedure->id}}">{{$procedure->title}}</option>
                  @endforeach

                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-defualt" value="Assign">
            </div>
        </form>

        <ul class="list-group">
            @foreach ($process->procedures as $procedure)
                <li class="list-group-item"><a href="/procedures/{{ $procedure->slug }}?id={{ $process->id }}">{{$procedure->title}}</a></li>
            @endforeach
        </ul>


        </div>
    </div>
</div>
        

    

@endsection
