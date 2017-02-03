@extends('layouts.app')

@section('sidebar')

    <div class="panel-heading">Side bar</div>

    <div class="panel-body">
        this is the sidebar
    </div>

@endsection

<div class="col-md-7">
    <div class="panel panel-default">

		@section('content')

		    <div class="panel-heading">Home</div>

		    <div class="panel-body">
		        <h1>Welcome</h1>

		    </div>

		@endsection

	</div>
</div>
