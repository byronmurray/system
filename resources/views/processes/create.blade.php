<!-- <form action="/procedures/{{ $process->id}}" method="POST" id="add_new_procedure_form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">New Procedure</label>
        <input type="text" name="title" class="form-control" required >
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-defualt" value="Add New">
    </div>
</form> -->

<form action="/processes" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-default" value="New Process">
    </div>
        
</form>

