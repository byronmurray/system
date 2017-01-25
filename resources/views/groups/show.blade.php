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

        <form action="/process/{{$group->id}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">Add Processes</label>
                <select class="form-control" multiple="multiple" id="process_id" name="process_id[]">
              
                  @foreach($processList as $process)
                      <option value="{{$process->id}}">{{$process->title}}</option>
                  @endforeach

                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-defualt" value="Add">
            </div>
        </form>
    </div>

@endsection
