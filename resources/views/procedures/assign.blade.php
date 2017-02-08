<form action="/procedures/{{ $process->id}}/assign" method="POST" id="assign_existing_form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="title">Procedures</label>
        <select style="width:100%;" class="form-control" multiple="multiple" id="procedure_id" name="procedure_id[]">
      
          @foreach($proceduresList as $procedure)
              <option value="{{$procedure->id}}">{{$procedure->title}}</option>
          @endforeach

        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Assign">
    </div>
</form>
