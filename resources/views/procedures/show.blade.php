@extends('layouts.app')

@section('sidebar')

    @include('sidebars.procedures')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Procedure - {{$procedure->title}} <small><em>Created by {{ $procedure->user->name }}  {{ $procedure->created_at->diffForHumans() }}</em></small></div>

        <div class="panel-body">

            <!-- Button trigger modal -->
            <div class="form-group">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                  Add Step
                </button>
            </div>

            @include('errors.form')

            @if ( Session::has('status') )
                <p class="bg-success" style="padding: 20px;
    border-radius: 5px;">{{ Session::get('status') }}<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
            @endif

            <ol>
                @foreach ($procedure->steps as $step)
                    <li>
                        <h2>{{$step->title}} <small>Created by {{ $step->user->name }}  {{ $step->created_at->diffForHumans() }}</small> </h2>

                        <div>{!! $step->body !!}</div>
                        
                            
                        <div class="button-wrap">
                            <button class="btn btn-default" data-toggle="modal" data-target="#edit-step-{{ $step->id }}">Edit</button>
                            <button class="btn btn-default">Delete</button>
                            <button class="btn btn-default">Move</button>
                        </div>
                        

                        <hr>
                    </li>

                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg" id="edit-step-{{ $step->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{$procedure->title}}</h4>
                          </div>
                          <div class="modal-body">
                            @include('procedures.edit')
                          </div>

                        </div>
                      </div>
                    </div>
                @endforeach
            </ol>

            

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$procedure->title}}</h4>
      </div>
      <div class="modal-body">
        @include('procedures.create')
      </div>

    </div>
  </div>
</div>




@endsection


