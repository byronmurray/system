<div class="col-md-3 col-md-offset-1">
    <div class="panel panel-default">

		@if ( is_null($process) )

			<div class="panel-heading">Side bar</div>
		    
			<div class="panel-body">
			    <ul>
			   	 	<li>This is the main Sidebar</li>
	    		    <li>Will have latest stuff etc</li>
	    		    <li>Dashboard panel</li>
			    </ul>
			</div>
			
		@else
			
			<div class="panel-heading">
				<a href="/processes">Process</a> - <a href="/processes/{{ $process->slug }}">{{$process->title}}</a>
			</div>
			    
			<div class="panel-body">
				<h2>Procedures</h2>
			    <ul class="list-group">
			        @foreach ($process->procedures as $procedure)
		            	<a href="/procedures/{{ $procedure->slug }}?id={{ $process->id }}">
			            	<li class="list-group-item">{{$procedure->title}}
			            		<span class="badge">{{ count( $procedure->steps ) }}</span>
							</li>
		            	</a>
			        @endforeach
			    </ul>
			</div>
			

		@endif

	</div>
</div>