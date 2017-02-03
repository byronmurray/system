@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

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
        </div>
    </div>
</div>
 
@endsection
