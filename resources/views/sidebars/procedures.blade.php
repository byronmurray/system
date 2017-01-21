<div class="panel-heading">Process - {{$process->title}}</div>
    
<div class="panel-body">
	<h2>Procedures</h2>
    <ul class="list-group">
        @foreach ($process->procedures as $procedure)
            <li class="list-group-item"><a href="/procedures/{{ $procedure->id }}?id={{ $process->id }}">{{$procedure->title}}</a></li>
        @endforeach
    </ul>
</div>