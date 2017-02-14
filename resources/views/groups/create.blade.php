{!! Form::open(['method'=>'POST','url'=>'groups'])  !!}
    <div class="form-group">
        <label for="title">Group title</label>
        <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Add New">
        <button data-dismiss="modal" class="btn btn-default">Cancel</button>
    </div>
{!! Form::close() !!}