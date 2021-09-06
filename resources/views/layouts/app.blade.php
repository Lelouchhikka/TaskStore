<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/myapp.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myapp.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/ae67e54abf.css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    <div id="app">
        <div class="wrapper">
            <div class="header">Header (Absolute)
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'TaskStore') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>
            </div>
            <div class="sidebar-1 bg-white border border-dark">
                <div class="sticky-spacer "></div>
                <div class="sticky-content ">





                </div>

            </div>

            <div class="sidebar-2 bg-white border border-dark">
                <div class="sticky-spacer"></div>
                <div class="sticky-content">
                    <div class="mb-3">
                        <button id="btnDiv1"class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Accordion</button>
                        <div id="demoAcc" class="w3-bar-block w3-hide w3-white w3-card-4">
                            <form action="{{route('home')}}" method="get" class="w-75">

                                @foreach($categories as $category)
                                    <button class="w-75 w3-bar-item w3-button" type="submit">
                                    <option value="{{$category->task_id}}" @if(isset($_GET['task_id'])) @if($_GET['task_id'] == $category->task_id) selected @endif @endif>



                                    </option>
                                       @endforeach


                            </form>
                        </div>
                    </div>
                    @if(!empty($categories))
                        <form action="{{route('home')}}" method="get" class="w-75">
                            <div class="mb-3">
                                <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Accordion</button>
                                <div id="demoAcc" class="w3-bar-block w3-hide w3-white w3-card-4">
                                    <a href="#" class="w3-bar-item w3-button">Link</a>
                                    <a href="#" class="w3-bar-item w3-button">Link</a>
                                </div>
                                <div class="form-label">Choose category</div>
                                <select name="category_id" class="form-select form-select-sm w-75" aria-label=".form-select-sm example">
                                    <option class="w-50">Без фильтра</option>
                                    @foreach($categories as $category)
                                        <option class="w-75" type="submit"  value="{{$category->task_id}}" @if(isset($_GET['task_id'])) @if($_GET['task_id'] == $category->task_id) selected @endif @endif> {{$category->task_name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    @endif
                </div>
            </div>
            <div class="content">
                <div class="sticky-spacer"></div>
                <div class="sticky-content">
                    <div>

                    </div>
        <main class="py-4">
        <div class="m-b-100">

        </div>
            @yield('content')
        </main>
                </div>
            </div>

        </div>
    </div>

    </div>
</body>
</html>
