<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/app.js')}}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>KaraokeYukz | @yield("subtitle")</title>
</head>

<body>

    <div class="container-fluid vh-100">
        <div class="row h-100">
            @section("sidebar")
            <div class="col-lg-2 bg-dark pt-4 pb-4 pl-0 h-100">
                <div>
                    <a href="/" class="h1 text-light font-title pl-3">KaraokeYukz</a>
                    <nav class="nav flex-column pt-2">
                        <div class="overflow-hidden">
                            <span class="bullet d-inline mr-3 {{Request::is("/") ? 'current' : ""}}"></span>
                            <a href="/" class="nav-link">Songs</a>
                        </div>
                    </nav>
                </div>
            </div>  
            @show
            <div id="content" class= "col-lg-10 bg-light h-100 pt-4 pl-4 overflow-auto">
                @yield("content")
            </div>
        </div>
    </div>
</body>
@yield("script")


</html>
