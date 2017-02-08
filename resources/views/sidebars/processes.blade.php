<div class="col-md-3 col-md-offset-1">
    <div class="panel panel-default">
		<div class="panel-heading">Processes</div>
		    
		<div class="panel-body">
		        <ul class="list-group">
		        @foreach ($processes as $process)
		            <a href="{{ route('process', [$process->slug]) }}">
		            	<li class="list-group-item">
		                	{{$process->title}}
		                	<span class="badge">{{ count( $process->procedures ) }}</span>
                		</li>
            		</a>
		                
		            
		        @endforeach
		    </ul>
		</div>
	</div>
</div>
		