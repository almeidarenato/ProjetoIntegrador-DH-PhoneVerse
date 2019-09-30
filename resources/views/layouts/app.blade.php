<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Phoneverse - admin - @yield('title') </title>
    <link rel="stylesheet" href={{asset("css/app.css")}} />
    <link rel="stylesheet" href={{asset("css/offcanvas.css")}} />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/cards.css')}}">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"
></script>
@yield('head-script')
<style>
    * {
      box-sizing: border-box;
    }

    .zoom {

      transition: transform .2s;

      margin: 0 auto;
    }

    .zoom:hover {
      -ms-transform: scale(3); /* IE 9 */
      -webkit-transform: scale(3); /* Safari 3-8 */
      transform: scale(3);
    }
    </style>
</head>
<body class="bg-light">
        <script>
                $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
            </script>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark  bg-purple">
        <a class="navbar-brand" href="/"
        ><img class="logo" src={{asset("img/logo.png")}} alt="logo phoneverse"
        /></a>
        <button
        class="navbar-toggler p-0 border-0"
        type="button"
        data-toggle="offcanvas"
        >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div
    class="navbar-collapse offcanvas-collapse"
    id="navbarsExampleDefault"
    >
    <ul class="navbar-nav mr-auto">

  </li>


    @guest
     <li class="nav-item">
       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @else
    <div class="my-2">
        <a href="" class="nav-link pr4"> Olá, <span class='username'> {{Auth::user()->name}}</span> </a>
    </div>
    <div class="my-2 my-lg-0">

            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
        <button type="submit" class="btn btn-outline-primary">
            Sair
        </button>
    </form>
    </div>
</ul>
    @endguest
</div>
</nav>

<main role="main" class="container">
    <div
    class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow"
    >
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
<div class="lh-100" style='margin-left:10px'>
<h6 class='mb-0 text-white lh-100'> Login </h6>

</div>

</div>
            @yield('content')
        </main>
    </div>
</body>
</html>
