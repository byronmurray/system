@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection

@section('content')

    <div class="panel-heading">Search Results</div>

    <div class="panel-body">
        if search results are greater than zero display below
        <h2>Processes</h2>
        <ul class="list-group">
            @foreach ($processes as $process)
                <li class="list-group-item">
                    <a href="{{ route('process', [$process->id]) }}">{{$process->title}}</a>
                </li>
            @endforeach
        </ul>
        <h2>Procedures</h2>
        <ul class="list-group">
            <li>Adding this as a test example</li>
        </ul>
    </div>
 
@endsection
