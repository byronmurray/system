@extends('layouts.app')

@section('sidebar')

    @include('sidebars.main')

@endsection

@section('content')
<div class="col-md-7">
    <div class="panel panel-default">

        <div class="panel-heading">Search Results</div>

        <div class="panel-body">

            @if (count($processes) + count($procedures) != 0)
                <p>Showing {{ count($processes) + count($procedures) }} Results total</p>
            @else
                <p>No results were found. Try simplifying your search term.</p>
            @endif
            
            
            @if (count($processes) != 0)

                <h2>Processes <small>Results {{ count($processes) }}</small></h2>
                <ul class="list-group">
                    @foreach ($processes as $process)
                        <a href="{{ route('process', [$process->slug]) }}">
                            <li class="list-group-item">{{$process->title}}
                              <span class="badge">{{ count( $process->procedures ) }}</span>
                            </li>
                        </a>
                    @endforeach
                </ul>

            @endif

            @if (count($procedures) != 0)

                <h2>Procedures <small>Results {{ count($procedures) }}</small> </h2>

                <ul class="list-group">
                    @foreach ($procedures as $procedure)
                        <a href="/procedures/{{ $procedure->slug }}?id=0">
                            <li class="list-group-item">{{$procedure->title}}
                                <span class="badge">{{ count( $procedure->steps ) }}</span>
                            </li>
                        </a>
                    @endforeach
                </ul>

            @endif
    
        </div>
    </div>
</div>
 
@endsection
