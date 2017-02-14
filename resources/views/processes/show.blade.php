@extends('layouts.app')

@section('sidebar')

    @include('sidebars.processes')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Process - {{$process->title}} <small><em>Created by {{ $process->user->name }}  {{ $process->created_at->diffForHumans() }}</em></small></div>

        <div class="panel-body">

        <!-- Button trigger modal -->
            <div class="form-group">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#new-procedure">New Procedure</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#assign-procedure">Assign Procedure</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#assign-group">Add to Group</button>
            </div>

            @include('errors.form')

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
        

<!-- Modal Creating a new Procedure for the process -->
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

<!-- Modal Assigning Procedure to Process -->
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


<!-- Modal Assigning Group -->
<div class="modal fade bs-example-modal-lg" id="assign-group" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Assign Group</h4>
      </div>
      <div class="modal-body">
        
        <!-- This will work in the inverse of adding from a group -->
        <form action="/groups/{{$process->id}}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <label for="title">Add Group</label>
              <select style="width:100%;" class="form-control" multiple="multiple" id="group_id" name="group_id[]">
            
                @foreach($groupList as $group)
                    <option value="{{$group->id}}">{{$group->title}}</option>
                @endforeach

              </select>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-default" value="Add Group">
              <button data-dismiss="modal" class="btn btn-default">Cancel</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>



    

@endsection
