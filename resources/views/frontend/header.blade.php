<script src='{{asset('js/app.js')}}'></script>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" alt="" srcset="" class="logo" style="filter: drop-shadow(2px 4px 6px black);">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#service">Seu Smartphone</a></li>
                <li><a href="#contact">Contato</a></li>
                <li class="dropdown">

                    @guest
                    <a href="/login" >Login</a>
                    @else
                <a href="" class="dropdown-toggle" data-toggle="dropdown"> Olá, <span > {{Auth::user()->name}}</span><b class="caret"></b> </a>
                    <ul class="dropdown-menu" >
                            @if(Auth::user()->nivelAcesso === 0)
                            <li><a href="/admin/my">Minhas Respostas</a></li>
                            @else
                            <li><a href="/admin/dashboard">Dashboard</a></li>
                            @endif
                            <li><a href="{{route('logout')}}" class="nav-link"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li>
                          </ul>
                    @endguest
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

