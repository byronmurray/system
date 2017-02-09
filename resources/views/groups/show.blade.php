@extends('layouts.app')

@section('sidebar')

    @include('sidebars.groups')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Group - {{$group->title}}</div>
        
        <div class="panel-body">
        
            @if ( Session::has('status') )
              <p class="bg-success" style="padding: 20px; border-radius: 5px;">
                {{ Session::get('status') }}
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </p>
            @endif

            <!-- Button trigger modal -->
            <div class="form-group">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#assign-processes">
                  Assign Processes
                </button>
            </div>

        
            <ul class="list-group">
                @foreach ($processes as $process)
                    <a href="{{ route('process', [$process->slug]) }}">
                  <li class="list-group-item">
                      {{$process->title}}
                      <span class="badge">{{ count( $process->procedures ) }}</span>
                    </li>
                </a>
                @endforeach
            </ul>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="assign-processes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Assign Processes</h4>
      </div>
      <div class="modal-body">
        @include('groups.assign')
      </div>

    </div>
  </div>
</div>


@endsection
