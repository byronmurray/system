@if (count($errors))
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
          <li><strong>Error!</strong> {{ $error }}</li>
        @endforeach
    </div>
@endif