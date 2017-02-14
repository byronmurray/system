<h3>Edit Step </h3>

{!! Form::open(['method'=>'PATCH', 'route' => ['step.update', $step->id ]])  !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="step-title" class="form-control" value="{{ $step->title }}" >
</div>
<div class="form-group">
    <label for="body">Description</label>
    <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ $step->body }}</textarea>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-default" value="Update">
    <button data-dismiss="modal" class="btn btn-default">Cancel</button>
</div>
    
{!! Form::close() !!}





                    