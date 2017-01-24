@extends('layouts.app')

@section('sidebar')

    @include('sidebars.groups')

@endsection

@section('content')

    <div class="panel-heading">Group - {{$group->title}}</div>

    <div class="panel-body">
        <ul class="list-group">
        @foreach ($processes as $process)
            <li class="list-group-item">
                <a href="{{ route('process', [$process->slug]) }}">{{$process->title}}</a>
            </li>
        @endforeach
    </ul>
    </div>

@endsection
