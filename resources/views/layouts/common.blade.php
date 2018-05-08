<!doctype html>
<html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> 2SN - Yoboulma | @yield('title') </title>

        @section('css')
            <link rel="stylesheet" href="/css/app.css" />
            <link rel="stylesheet" href="/css/form.css" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        @show
    </head>

    <body>
        <div class="container-fluid">
            @yield('content')
        </div>

        <div class="container-fluid">
            @yield('features')
        </div>


        @section('js')
            <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
            <script src="/js/manifest.js"></script>
            <script src="/js/vendor.js"></script>
            <script src="/js/app.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        @show

        @if (getenv('APP_ENV') === 'local')
            <script id="__bs_script__">//<![CDATA[
                document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
                //]]>
            </script>
        @endif

        <footer class="container-fluid text-center footer">
          <p> Yoboulma Copyright 2018 </p>
        </footer>
    </body>
</html>
