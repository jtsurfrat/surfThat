<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>surfThat</title>
        <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
        <script src="{{ asset('js/vendor/modernizr.js')}}"></script>
    </head>

<body>

    <!-- Header and Nav -->
 
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">surfThat</a></h1>
            </li>
        </ul>
    </nav>
 
    <!-- End Header and Nav -->

    <div class="row">
        <div class="large-12">
            @yield('content')
        </div>
    </div>
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>© surfThat</p>
                </div>
            </div>
        </div>
    </footer>
    <script>

    {{ HTML::script('js/vendor/jquery.js') }}
    {{ HTML::script('js/foundation.min.js') }}
    </script>

    <script>
      $(document).foundation();
    </script>
    </body>
</html>




<html>
    <head>
        <title>Laravel</title>
        
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="/foundation.css">

        

