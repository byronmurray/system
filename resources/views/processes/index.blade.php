@extends('layouts.app')

@section('sidebar')

    @include('sidebars.groups')

@endsection

@section('content')

    <div class="panel-heading">Processes</div>

    <div class="panel-body">
    <ul class="list-group">
        @foreach ($processes as $process)
            <li class="list-group-item">
                <a href="{{ route('process', [$process->id]) }}">{{$process->title}}</a>
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
