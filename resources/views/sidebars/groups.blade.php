<div class="panel-heading">Groups</div>
    
<div class="panel-body">

 
    <ul class="list-group">
        @foreach ($groups as $group)
            <li class="list-group-item">
                <a href="/group/{{ $group->id }}">{{$group->title}}</a>
            </li>
        @endforeach
    </ul>


    {!! Form::open(['method'=>'POST','url'=>'groups'])  !!}
        <div class="form-group">
            <label for="title">Group title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-defualt" value="Add New">
        </div>
    {!! Form::close() !!}
</div>