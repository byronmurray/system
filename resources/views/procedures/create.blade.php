<h3>Add New Step </h3>

<form action="/procedures/{{ $procedure->id }}/steps" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="step-title" class="form-control" value="{{ old('title') }}" >
</div>
<div class="form-group">
    <label for="body">Description</label>
    <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-defualt" value="Add Step">
</div>
    
</form>