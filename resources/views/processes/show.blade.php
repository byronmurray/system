@extends('layouts.app')

@section('sidebar')

    <div class="panel-heading">Side bar</div>

    <div class="panel-body">
        this is the sidebar
    </div>

@endsection

@section('content')

    <div class="panel-heading">{{$process->title}}</div>

    <div class="panel-body">
    <ul class="list-group">
        @foreach ($process->procedures as $procedure)
            <li class="list-group-item"><a href="{{ route('procedure', [$procedure->id]) }}">{{$procedure->title}}</a></li>
        @endforeach
    </ul>

    <form action="/procedures/{{ $process->id}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">New Procedure</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-defualt" value="Add New">
        </div>
    </form>

    <form action="/procedures/{{ $process->id}}/assign" method="POST">
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
            <input type="submit" class="btn btn-defualt" value="Assign Existing">
        </div>
    </form>


    </div>

    

@endsection
