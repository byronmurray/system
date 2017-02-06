<div class="col-md-3 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Groups</div>
            
            <div class="panel-body">

                <ul class="list-group">
                    @foreach ($groups as $group)
                        <li class="list-group-item">
                            <a href="/group/{{ $group->slug }}">{{$group->title}}</a>
                            <span>{{ count($group->processes) }}</span>
                        </li>
                    @endforeach
                </ul>

                {!! Form::open(['method'=>'POST','url'=>'groups'])  !!}
                    <div class="form-group">
                        <label for="title">Group title</label>
                        <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-defualt" value="Add New">
                    </div>
                {!! Form::close() !!}

                @include('errors.form')


            
        </div>
    </div>
</div>