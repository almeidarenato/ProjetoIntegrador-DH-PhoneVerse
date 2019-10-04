<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PhoneVerse</title>

        <!-- Range Requires -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


 <!-- JQuery UI + JQUERY-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
 <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
 <script src="{{asset('js/jquery.min.js')}}"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://use.fontawesome.com/fd9dba5260.js"></script>



    <!--<MultiStep> -->
    <link rel="stylesheet" type="text/css" href="/css/MultiStep.min.css">
    <link rel="stylesheet" type="text/css" href="/css/MultiStep-theme.min.css">
    <!--</MultiStep> -->

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- / Bootstrap Core CSS -->

    <!-- icon -->
    <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.css" rel="stylesheet" />

    <!-- Squad theme CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/default.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/navbar.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- Preloader -->
    <div id="preloader">
        <div id="load"></div>
    </div>
    @include('header2')



    <!-- Section: top3 -->
    <section id="top3" class="top3-section text-center" style="padding: 110px 0;">

        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.2s">
                            <div class="section-heading">
                                <h2>Top 3 Resultados</h2>
                                {{-- <i class="fa fa-2x fa-angle-down"></i> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
    <div class="row">
        @if(!isset($aparelho) || $aparelho === '' )

        <div class="alert alert-warning">
                <strong>Não encontramos resultados para suas escolhas. clique em "ver mais" e explore outras opções disponíveis.</strong>
            </div>
    @else
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>1º Opção</h5>
                            <p class="subtitle">{{$aparelho[0]->modelo}}</p>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{asset($aparelho[0]->imagem)}}" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <ul class="p_description">
                                            <li>Câmera Frontal:<span class='atributo'> {{$aparelho[0]->camerafrontal}}  Mpx<span></li>
                                            <li>Câmera Traseira:<span class='atributo'>  {{$aparelho[0]->cameratraseira}} Mpx <span></li>
                                            <li>Memória RAM:<span class='atributo'> {{$aparelho[0]->memoriaram->quantidade}} Gb<span></li>
                                            <li>Memória Interna:<span class='atributo'> {{$aparelho[0]->memoriainterna->quantidade}} Gb<span></li>
                                            <li>Preço:<span class='atributo'>  R$ {{$aparelho[0]->preco}} <span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="botoes_top3"><button onclick="location.href='/aparelho/{{$aparelho[0]->id}}'">Veja este smartphone</button></p>
            </div>
        </div>
        @if(isset($aparelho[1]))
        <div class="col-md-4">
            <div class="card">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>2º Opção</h5>
                            <p class="subtitle">{{$aparelho[1]->modelo}}</p>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{asset($aparelho[1]->imagem)}}" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <ul class="p_description">
                                            <li>Câmera Frontal:<span class='atributo'> {{$aparelho[1]->camerafrontal}}  Mpx<span></li>
                                            <li>Câmera Traseira:<span class='atributo'>  {{$aparelho[1]->cameratraseira}} Mpx <span></li>
                                            <li>Memória RAM:<span class='atributo'> {{$aparelho[1]->memoriaram->quantidade}} Gb<span></li>
                                            <li>Memória Interna:<span class='atributo'> {{$aparelho[1]->memoriainterna->quantidade}} Gb<span></li>
                                            <li>Preço:<span class='atributo'>  R$ {{$aparelho[1]->preco}} <span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="botoes_top3"><button onclick="location.href='/aparelho/{{$aparelho[1]->id}}'">Veja este smartphone</button></p>
            </div>
        </div>
        @endif
        @if(isset($aparelho[2]))
        <div class="col-md-4">
            <div class="card">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>3º Opção</h5>
                            <p class="subtitle">{{$aparelho[2]->modelo}}</p>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{asset($aparelho[2]->imagem)}}" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <ul class="p_description">
                                            <li>Câmera Frontal:<span class='atributo'> {{$aparelho[2]->camerafrontal}}  Mpx<span></li>
                                            <li>Câmera Traseira:<span class='atributo'>  {{$aparelho[2]->cameratraseira}} Mpx <span></li>
                                            <li>Memória RAM:<span class='atributo'> {{$aparelho[2]->memoriaram->quantidade}} Gb<span></li>
                                            <li>Memória Interna:<span class='atributo'> {{$aparelho[2]->memoriainterna->quantidade}} Gb<span></li>
                                            <li>Preço:<span class='atributo'>  R$ {{$aparelho[2]->preco}} <span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <p class="botoes_top3"><button onclick="location.href='/aparelho/{{$aparelho[2]->id}}'">Veja este smartphone</button></p>
            </div>
        </div>
        @endif
        @endif
    </div>
</div>
    </section>

    <!-- /Section: top3 -->


    <!-- Section: +9 -->

    <script>
        $( function() {
          $( "#accordion" ).accordion({
            heightStyle: "content",
            collapsible: true,
            active :false
          });
        } );
        </script>

<div id="accordion-resizer" class="ui-widget-content text-center">

    <div id="accordion" >

        <h3 id='faixa-vermais' class='action'  ><b class="caret"></b> Ver mais opções <b class="caret"></b></h3>

            <div>
            <section id="mais9" class="top3-section text-center" style='padding: 110px 0 '>
                <div class="container" style='background-color:#E8EAEB'>
                <div class="row">

                    {{-- inicio dos cards --}}
            @foreach($aparelhosVerMais as $aparelhoVM)
            <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                            <div class="team boxed-grey">
                                <div class="inner">

                                    <p class="subtitle" style='font-size:15px'>{{$aparelhoVM->modelo}}</p>
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="{{asset($aparelhoVM->imagem)}}" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                            <div class="flip-card-back">
                                                <ul class="p_description">
                                                    <li>Câmera Frontal:<span class='atributo'> {{$aparelhoVM->camerafrontal}}  Mpx<span></li>
                                                    <li>Câmera Traseira:<span class='atributo'>  {{$aparelhoVM->cameratraseira}} Mpx <span></li>
                                                    <li>Memória RAM:<span class='atributo'> {{$aparelhoVM->memoriaram->quantidade}} Gb<span></li>
                                                    <li>Memória Interna:<span class='atributo'> {{$aparelhoVM->memoriainterna->quantidade}} Gb<span></li>
                                                    <li>Preço:<span class='atributo'>  R$ {{$aparelhoVM->preco}} <span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="botoes_top3"><button onclick="location.href='/aparelho/{{$aparelhoVM->id}}'">Veja este smartphone</button></p>
                    </div>
                </div>
                @endforeach
{{-- fim dos cards --}}

            </section>

        </div>
    </div>
</div>

    <!-- /Section: Footer -->
<!-- Modal FAQ -->
                        <script>
                            $( function() {
                                $( "#accordion" ).accordion({
                                    heightStyle: "content",
                                    collapsible: true,
                                    active :false
                                });
                            } );
                        </script>
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="wow shake" data-wow-delay="0.4s">
                            <div class="page-scroll marginbot-30">
                                <a href="#intro" id="totop" class="btn btn-circle">
                                    <i class="fa fa-angle-double-up animated"></i>
                                </a>
                            </div>
                        </div>
                        <p>&copy;PhoneVerse</p>
                        <div class="credits">

                            <button type="button" class="btn btn-skin" data-toggle="modal" data-target="#modalFAQ">
                                Perguntas Frequentes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal FAQ -->
            <script>
                $( function() {
                    $( "#accordionfaq" ).accordion({
                        heightStyle: "content",
                        collapsible: true,
                        active :false
                    });
                } );
            </script>




            <div class="modal fade" id="modalFAQ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Dúvidas Frequentes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="accordion-resizer" class="ui-widget-content text-center">

                                <div id="accordionfaq" >

                                    <h3 id='faixa-vermais'  >Como a PhoneVerse foi criada?</h3>
                                    <div>
                                        <p class='text-light bg-dark' >R: Através de um projeto do curso Web Full Stack ministrado pela Digital House.</p>
                                    </div>

                                    <h3 id='faixa-vermais'  >Em qual Ano a PhoneVerse foi desenvolvida?</h3>
                                    <div>
                                        <p class='text-light bg-dark' >Iniciamos o conceito e o desenvolvimento em 2019.</p>
                                    </div>
                                    <h3 id='faixa-vermais'  >A Phoneverse será somente especializada em smartphones?</h3>
                                    <div>
                                        <p class='text-light bg-dark' >Sim, no momento pretendemos focar em uma base de conhecimento de smartphones </p>
                                    </div>
                                    <h3 id='faixa-vermais'  >Onde posso encontrar informações técnicas sobre um telefone?</h3>
                                    <div>
                                        <p class='text-light bg-dark' >R: Basta preencher o formulário localizado na página principal com o nome a ser alterado e a sugestão.</p>
                                    </div>
                                    <h3 id='faixa-vermais'>Não encontrei um celular aqui! Como solicito informações ?</h3>
                                    <div>
                                        <p class='text-light bg-dark' >R: A phoneverse vai adicionando aos poucos os celulares mais recentes assim que todas as informações estiverem disponíveis. De qualquer maneira basta nos notificar pelo formulário de contato.</p>
                                    </div>
                                    <h3 id='faixa-vermais'>Li tudo mas ainda assim, não encontrei uma resposta para minha dúvida, o que eu faço?</h3>
                                    <div>
                                        <p class='text-light bg-dark' > R:  Basta preencher o formulário abaixo e nos dizer do que precisa. Não se esqueça de suas informações e contato! E em breve você receberá uma resposta de nossa equipe por e-mail.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Core JavaScript Files -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/custom.js"></script>
    <script src="/js/contactform.js"></script>

    <!-- Recursos para o Questionario-Modal -->
    <script type="text/javascript" src="/js/MultiStep.min.js"></script>
    <script type="text/javascript" src="/js/questionario.js"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>

</body>
</html>
