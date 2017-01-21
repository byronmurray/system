@extends('layouts.app')

@section('sidebar')

    @include('sidebars.procedures')

@endsection

@section('content')

    <div class="panel-heading">Procedure - {{$procedure->title}}</div>

    <div class="panel-body">
        <ol>
            @foreach ($procedure->steps as $step)
                <li>
                    <h2>{{$step->title}}</h2>
                    <p>{{ $step->body }}</p>
                    <hr>
                </li>
            @endforeach
        </ol>

        <h3>Add a new step</h3>

        <form action="/procedures/{{ $procedure->id }}/steps" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Description</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-defualt" value="Add Step">
        </div>
            
        </form>

    </div>

@endsection
