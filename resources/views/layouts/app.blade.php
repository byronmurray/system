<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>

        .button-wrap {
            overflow: hidden;
        }

        .button-wrap button {
            float: right;
            margin-right: 5px;
        }

        .btn-top {
            margin: 15px;
        }

        .list-group-item {
            margin: 5px 0;
        }

        h2, .list-group-item {
            text-transform: capitalize;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="/processes">Processes</a></li>
                        <li><a href="/todo">Todo</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Documents</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if (!Auth::guest())
            <div class="container-fluid">
                <div class="row pull-right">
                    <div class="col-md-12 col-md-offset-1">
                        {!! Form::open(['method'=>'GET','url'=>'search','class'=>'navbar-form','role'=>'search'])  !!}

                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Quick Search...">
                            <span class="input-group-btn">
                                <button class="btn" type="submit">Search</button>
                            </span>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endif

        <!-- main content section -->
        <div class="container-fluid">
            <div class="row">
                
                @yield('sidebar')
                
                
                @yield('content')
                
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script type="text/javascript">
      $('select').select2();

      $("#procedure_id").select2({
        placeholder: "Start typing..."
      });

    </script>

    {{-- cdn tinymce text editor --}}
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   <script>
     var editor_config = {
       path_absolute : "/",
       selector: "textarea",
       height: 500,
       plugins: [
         "advlist autolink lists link image charmap print preview hr anchor pagebreak",
         "wordcount visualblocks visualchars code fullscreen",
         "nonbreaking table",
         "emoticons template paste textcolor colorpicker textpattern"
       ],
       menu: "insert",
       toolbar: "bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
       relative_urls: false,
       //link_context_toolbar: true,
       //link_list: "/links",
   
       file_browser_callback : function(field_name, url, type, win) {
         var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
         var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
   
         var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
         if (type == 'image') {
           cmsURL = cmsURL + "&type=Images";
         } else {
           cmsURL = cmsURL + "&type=Files";
         }
   
         tinyMCE.activeEditor.windowManager.open({
           file : cmsURL,
           title : 'Filemanager',
           width : x * 0.8,
           height : y * 4,
           resizable : "yes",
           close_previous : "no"
         });
       }
     };
   
     tinymce.init(editor_config);
   </script>
    
</body>
</html>
