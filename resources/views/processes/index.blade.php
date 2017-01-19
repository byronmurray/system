@extends('layouts.app')

@section('sidebar')

    <div class="panel-heading">Side bar</div>

    <div class="panel-body">
        this is the sidebar
    </div>

@endsection

@section('content')

    <div class="panel-heading">Processes</div>

    <div class="panel-body">
    <ul class="list-group">
        @foreach ($processes as $process)
            <li class="list-group-item">
                <a href="{{ route('process', [$process->id]) }}">{{$process->title}}</a>
                <button type="button" class="btn btn-danger btn-xs pull-right">
                  <span class="glyphicon glyphicon-trash" title="delete process"></span>
                </button> 
            </li>
        @endforeach
    </ul>

    <form action="/processes" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-defualt" value="New Process">
        </div>
            
    </form>

    </div>
 
@endsection
