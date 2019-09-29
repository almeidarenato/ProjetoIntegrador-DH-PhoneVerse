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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
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
        <div class="col-md-4">
            <div class="card">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>1º Opção</h5>
                            <p class="subtitle">{{$aparelho->marca}} {{$aparelho->modelo}}</p>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="/img/motorola_z2.jpg" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <ul class="p_description">
                                            <li>Câmera:----</li>
                                            <li>Memória RAM:----</li>
                                            <li>Memória Interna:----</li>
                                            <li>Preço:----</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
                <p class="botoes_top3"><button >Veja este smartphone</button></p>
            </div>
        </div>
 
        <div class="col-md-4">
            <div class="card">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>2º Opção</h5>
                            <p class="subtitle">Xiaomi Mi 9</p>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="/img/xiaomi_mi9.jpg" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <ul class="p_description">
                                            <li>Câmera:----</li>
                                            <li>Memória RAM:----</li>
                                            <li>Memória Interna:----</li>
                                            <li>Preço:----</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
                <p class="botoes_top3"><button >Veja este smartphone</button></p>
            </div>
        </div>
 
        <div class="col-md-4">
            <div class="card">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team boxed-grey">
                        <div class="inner">
                            <h5>3º Opção</h5>
                            <p class="subtitle">Asus Zenfone 6</p>
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="/img/asus_zenfone_6.jpg" alt="Avatar" style="width:250px;height:250px;">
                                    </div>
                                    <div class="flip-card-back">
                                        <ul class="p_description">
                                            <li>Câmera:----</li>
                                            <li>Memória RAM:----</li>
                                            <li>Memória Interna:----</li>
                                            <li>Preço:----</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
                <p class="botoes_top3"><button >Veja este smartphone</button></p>
            </div>
        </div>
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
        
        <h3 id='faixa-vermais'  >Ver mais...</h3>
 
            <div>
            <section id="mais9" class="top3-section text-center" style='padding: 110px 0 '>
                <div class="container" style='background-color:#E8EAEB'>
                <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>4º Opção</h5>
                                            <p class="subtitle">Samsung J8</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/samsung_j8.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>5º Opção</h5>
                                            <p class="subtitle">Samsung A50</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/samsung_a50.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>6º Opção</h5>
                                            <p class="subtitle">Iphone 10</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/iphone_10.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>7º Opção</h5>
                                            <p class="subtitle">Iphone 8 Plus</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/iphone_8plus.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>8º Opção</h5>
                                            <p class="subtitle">Sony Xperia XZ2</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/sony_xperia_xz2.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>9º Opção</h5>
                                            <p class="subtitle">Huawei Mate 30</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/huawei_mate_30.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>10º Opção</h5>
                                            <p class="subtitle">LG LK12+</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/lg_kg12.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>11º Opção</h5>
                                            <p class="subtitle">Huawei Honor</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/huawei_honor.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                                <div class="team boxed-grey">
                                    <div class="inner">
                                            <h5>12º Opção</h5>
                                            <p class="subtitle">Sony Xperia X</p>
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <img src="/img/sony_xperia_x.jpg" alt="Avatar" style="width:250px;height:250px;">
                                            </div>
                                                <div class="flip-card-back">
                                                    <ul class="p_description">
                                                        <li>Câmera:----</li>
                                                        <li>Memória RAM:----</li>
                                                        <li>Memória Interna:----</li>
                                                        <li>Preço:----</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        <p class="botoes_top3"><button >Veja este smartphone</button></p>
                    </div>
                </div>

            </section>
        
        </div>   
    </div>
</div>

    <!-- /Section: +9 -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="wow shake" data-wow-delay="0.4s">
                        <div class="page-scroll marginbot-30">
                            <a href="#top3" id="totop" class="btn btn-circle">
                                <i class="fa fa-angle-double-up animated"></i>
                            </a>
                        </div>
                    </div>
                    <p>&copy;PhoneVerse.</p>
                    <div class="credits">
                        <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
