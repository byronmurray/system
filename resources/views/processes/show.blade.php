@extends('layouts.app')

@section('sidebar')

    @include('sidebars.processes')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Process - {{$process->title}} <small><em>Created by {{ $process->user->name }}  {{ $process->created_at->diffForHumans() }}</em></small></div>

        <div class="panel-body">

        @include('errors.form')

        <!-- Button trigger modal -->
            <div class="form-group">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#new-procedure">
                  New Procedure
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#assign-procedure">
                  Assign Procedure
                </button>
            </div>

            @if ( Session::has('status') )
              <p class="bg-success" style="padding: 20px;
              border-radius: 5px;">{{ Session::get('status') }}
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </p>
            @endif

            <h2>Procedures</h2>

            <ul class="list-group">
                @foreach ($process->procedures as $procedure)
                    <a href="/procedures/{{ $procedure->slug }}?id={{ $process->id }}">
                        <li class="list-group-item">{{$procedure->title}}
                            <span class="badge">{{ count( $procedure->steps ) }}</span>
                        </li>
                    </a>
                @endforeach
            </ul>


        </div>
    </div>
</div>
        


<div class="modal fade bs-example-modal-lg" id="new-procedure" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Procedure</h4>
      </div>
      <div class="modal-body">
        @include('procedures.create')
      </div>

    </div>
  </div>
</div>


<div class="modal fade bs-example-modal-lg" id="assign-procedure" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Assign Procedure</h4>
      </div>
      <div class="modal-body">
        @include('procedures.assign')
      </div>

    </div>
  </div>
</div>



    

@endsection
