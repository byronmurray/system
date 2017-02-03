@extends('layouts.app')

@section('sidebar')

    @include('sidebars.procedures')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Procedure - {{$procedure->title}} <small><em>Created by {{ $procedure->user->name }}  {{ $procedure->created_at->diffForHumans() }}</em></small></div>

        <div class="panel-body">
            <ol>
                @foreach ($procedure->steps as $step)
                    <li>
                        <h2>{{$step->title}} <small>Created by {{ $step->user->name }}  {{ $step->created_at->diffForHumans() }}</small> </h2>

                        <p>{{ $step->body }}</p>
                        <hr>
                    </li>
                @endforeach
            </ol>

            <h3>Add a new Step</h3>

            @include('errors.form')

            <form action="/procedures/{{ $procedure->id }}/steps" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="body">Description</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10" required>{{ old('body') }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-defualt" value="Add Step">
            </div>
                
            </form>

        </div>
    </div>
</div>

@endsection
