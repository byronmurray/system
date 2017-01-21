<div class="panel-heading">Processes</div>
    
<div class="panel-body">
        <ul class="list-group">
        @foreach ($processes as $process)
            <li class="list-group-item">
                <a href="{{ route('process', [$process->id]) }}">{{$process->title}}</a>
            </li>
        @endforeach
    </ul>
</div>