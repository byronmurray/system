@extends('layouts.app')

@section('sidebar')

    @include('sidebars.groups')

@endsection

@section('content')

<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Processes</div>

        <button class="btn btn-default btn-top" data-toggle="modal" data-target="#new-process">Add New</button>


        @include('errors.form')

        @if ( Session::has('status') )
          <p class="bg-success" style="padding: 20px;
          border-radius: 5px;">{{ Session::get('status') }}
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </p>
        @endif

        <div class="panel-body">
          <ul class="list-group">
            @foreach ($processes as $process)
              <a href="{{ route('process', [$process->slug]) }}">
                <li class="list-group-item">{{$process->title}}
                  <span class="badge">{{ count( $process->procedures ) }}</span>
                </li>
              </a>
            @endforeach
          </ul>

        </div>
    </div>
</div>

 <div class="modal fade bs-example-modal-lg" id="new-process" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Process</h4>
      </div>
      <div class="modal-body">
        @include('processes.create')
      </div>

    </div>
  </div>
</div>
 
@endsection
