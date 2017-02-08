<div class="col-md-3 col-md-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">Groups</div>
            
            <div class="panel-body">

                <!-- messages -->
                @include('errors.form')

                @if ( Session::has('status') )
                  <p class="bg-success" style="padding: 20px; border-radius: 5px;">
                    {{ Session::get('status') }}
                    <button type="button" class="close" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </p>
                @endif

                <!-- Button trigger modal -->
                <div class="form-group">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#new-group">
                      Add New Group
                    </button>
                </div>

                <ul class="list-group">
                    @foreach ($groups as $group)
                        <a href="/group/{{ $group->slug }}">
                            <li class="list-group-item">{{$group->title}}
                                <span class="badge">{{ count($group->processes) }}</span>
                            </li>
                        </a>
                    @endforeach
                </ul>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="new-group" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Group</h4>
      </div>
      <div class="modal-body">
        @include('groups.create')
      </div>

    </div>
  </div>
</div>