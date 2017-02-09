{!! Form::open(['method'=>'delete','route' => ['steps.remove', $step->id] ])  !!}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<h1>Are you sure you want to delete this Step?</h1>
	</div>

	<div class="form-group">
	    <input type="submit" class="btn btn-default" value="Delete">
	    <button data-dismiss="modal" class="btn btn-default">Cancel</button>
	</div>
    
{!! Form::close() !!}