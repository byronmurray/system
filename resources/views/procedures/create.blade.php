<form action="/procedures/{{ $process->id}}" method="POST" id="add_new_procedure_form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required >
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Add New">
        <button data-dismiss="modal" class="btn btn-default">Cancel</button>
    </div>
</form>