@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Process</div>

                <div class="panel-body">
                <ul class="list-group">
                    @foreach ($processes as $process)
                        <li class="list-group-item"><a href="{{ route('process', [$process->id]) }}">{{$process->title}}</a></li>
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
            </div>
        </div>
    </div>
</div>
@endsection
