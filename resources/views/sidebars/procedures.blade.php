<div class="col-md-3 col-md-offset-1">
    <div class="panel panel-default">
		<div class="panel-heading"><a href="/processes">Process</a> - {{$process->title}}</div>
		    
		<div class="panel-body">
			<h2>Procedures</h2>
		    <ul class="list-group">
		        @foreach ($process->procedures as $procedure)
		            <li class="list-group-item"><a href="/procedures/{{ $procedure->slug }}?id={{ $process->id }}">{{$procedure->title}}</a></li>
		        @endforeach
		    </ul>
		</div>
	</div>
</div>