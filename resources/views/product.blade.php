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

    <!-- Section: intro -->
    <section id="intro_product" class="intro_product">

        <div class="slogan">
            <h2><span class="text_color"></span> </h2>
            <h4></h4>
        </div>

    </section>
    <!-- /Section: intro -->


    <section id="top3" class="top3-section text-center" style="padding: 110px 0;">
        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Seu Produto Predileto!</h2>
                                {{-- <i class="fa fa-2x fa-angle-down"></i> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5>1º Opção</h5>
                                    <p class="subtitle">Motoral Z² Play</p>
                                    <div class="avatar"><img src="/img/motorola_z2.jpg" alt="" class="img-responsive" /></div>
                                    <ul class="product_page_description">
                                        <li>Marca:----------------------</li>
                                        <li>Sistema Operacional:--------</li>
                                        <li>Processador:----------------</li>
                                        <li>Memória Interna:------------</li>
                                        <li>Memória RAM:----------------</li>
                                        <li>Câmera Frontal:-------------</li>
                                        <li>Memória RAM:----------------</li>
                                        <li>Memória Interna:------------</li>
                                        <li>Câmera Traseira:------------</li>
                                        <li>Slot Sim:-------------------</li>
                                        <li>Preço:----------------------</li>                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
 
</section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="wow shake" data-wow-delay="0.4s">
                        <div class="page-scroll marginbot-30">
                            <a href="#top3-section" id="totop" class="btn btn-circle">
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
