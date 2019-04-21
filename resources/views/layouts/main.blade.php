<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Blog!')</title> 
    <!--default title: Blog -->
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <style type="text/css">
        .button {
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 20px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
            }

        .button1 {
              background-color: white; 
              color: black; 
              border: 2px solid #008CBA;
            }

        a:hover{color:pink}

        .myimage {
            display:block;
            margin-left: auto;
            margin-right: auto;
        }

        div.borderComments {
            border-style: solid;
            border-width: 1px;
            border-color: gray;
            
            border-radius: 5px;
            padding: 15px;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
