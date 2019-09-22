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
    <script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"
></script>
</head>
<body class="bg-light">
        <script>
                $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            })
           $('.toast').toast(option)
            </script>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark  bg-purple">
        <a class="navbar-brand" href="#"
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
        <li class="nav-item active">
            <a class="nav-link" href="#"
            >Home <span class="sr-only">(current)</span></a
            >
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Usuários</a>
        </li>
        <li class="nav-item dropdown">
            <a
            class="nav-link dropdown-toggle"
            href="http://example.com"
            id="dropdown01"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >Cadastros</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Aparelho</a>
                <a class="dropdown-item" href="#">Marca</a>
                <a class="dropdown-item" href="#"
                >Sistema Operacional</a
                >
                <a class="dropdown-item" href="#">Processador</a>
                <a class="dropdown-item" href="#"
                >Memória Interna</a
                >
                <a class="dropdown-item" href="#">Memória Ram</a>
                <a class="dropdown-item" href="#">Slot Sim</a>
            </div>
        </li>
    </ul>
    <div class="my-2 my-lg-0">
        <button type="button" class="btn btn-outline-primary">
            Sair
        </button>
    </div>
</div>
</nav>

<main role="main" class="container">
    <div
    class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow"
    >
    <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    class="feather feather-edit"
    >
    <path
    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
    ></path>
    <path
    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
    ></path>
</svg>
<div class="lh-100" style='margin-left:10px'>
<h6 class='mb-0 text-white lh-100'> @yield('title') </h6>
<small>Cadastro e Edição</small>
</div>

</div>
        @yield('content')

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>


<script src={{asset("js/app.js")}}></script>
<script src={{asset("js/offcanvas.js")}}></script>
</body>
</html>
