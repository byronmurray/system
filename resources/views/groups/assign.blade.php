<form action="/process/{{$group->id}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">Add Processes</label>
        <select style="width:100%;" class="form-control" multiple="multiple" id="process_id" name="process_id[]">
      
          @foreach($processList as $process)
              <option value="{{$process->id}}">{{$process->title}}</option>
          @endforeach

        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Assign Processes">
        <button data-dismiss="modal" class="btn btn-default">Cancel</button>
    </div>
</form>