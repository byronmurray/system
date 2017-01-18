@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
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
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-defualt" value="New Procedure">
                    </div>
                </form>

                <form action="/procedures/{{ $process->id}}/assign" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="title">Procedure ID</label>
                        <input type="number" name="procedure_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-defualt" value="Assign Procedure">
                    </div>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
