<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Blog!')</title> 
    <!--default title: Blog -->
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>

<body>

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">Blog</li>
                <li><a href="/">Home</a></li>
                <li><a href="/articles">Articles</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="callout large primary">
        <div class="row column text-center">
            <h1>@yield('subtitle')</h1>
            <h2 class="subheader"> @yield('subheader', 'Blog!')</h2>
        </div>
    </div>

        @if(Session::has('flash_message'))
   {!! session('flash_message') !!}
@endif
    @yield('content')

</body>
</html>
