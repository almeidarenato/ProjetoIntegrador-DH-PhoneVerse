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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/fd9dba5260.js"></script>

    <!--< Componente Range  >-->
    <script render src="js/range.js"></script>
    <link rel="stylesheet" href="css/range.css">
    <!--</ Componente Range > -->

    <!--<MultiStep> -->
    <link rel="stylesheet" type="text/css" href="/css/MultiStep.min.css">
    <link rel="stylesheet" type="text/css" href="/css/MultiStep-theme.min.css">
    <!--</MultiStep> -->
    <!-- Bootstrap Core CSS -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- icon -->
    <link rel="apple-touch-icon" sizes="152x152" href="frontend/icon/apple-touch-icon.png">
    <link rel="icon" type="frontend/image/png" sizes="32x32" href="frontend/icon/favicon-32x32.png">
    <link rel="icon" type="frontend/image/png" sizes="16x16" href="frontend/icon/favicon-16x16.png">
    <link rel="manifest" href="frontend/icon/site.webmanifest">
    <link rel="mask-icon" href="frontend/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link href="frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="frontend/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="frontend/color/default.css" rel="stylesheet">



</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- Preloader -->
    <div id="preloader">
        <div id="load"></div>
    </div>
    @include('frontend.header')
    <!-- Section: intro -->
    <section id="intro" class="intro">

        <div class="slogan">
            <h2><span class="text_color">Clique e conheça o seu próximo smartphone</span> </h2>
            <h4></h4>
        </div>
        <div class="page-scroll">
            <a href="#service" class="btn btn-circle">
                <i class="fa fa-angle-double-down animated"></i>
            </a>
        </div>
    </section>
    <!-- /Section: intro -->

    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Sobre Nós</h2>
                                <i class="fa fa-2x fa-angle-down"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Anna Hanaceck</h5>
                                <p class="subtitle">Pixel Crafter</p>
                                <div class="avatar"><img src="frontend/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.5s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Maura Daniels</h5>
                                <p class="subtitle">Ruby on Rails</p>
                                <div class="avatar"><img src="frontend/img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.8s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Jack Briane</h5>
                                <p class="subtitle">jQuery Ninja</p>
                                <div class="avatar"><img src="frontend/img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="1s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Tom Petterson</h5>
                                <p class="subtitle">Typographer</p>
                                <div class="avatar"><img src="frontend/img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: about -->


    <!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">

        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Seu Smartphone</h2>
                                <i class="fa fa-2x fa-angle-down"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>

            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="frontend/img/think.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Me ajude a escolher</h5>
                            <p>Escolhendo esta opção, nós te mostraremos as melhores opções de aparelhos com base em suas respostas em um rápido questionário </p>
                            <button type="button" class="buttonsp" data-toggle="modal" data-target="#esquerda">Preciso de Ajuda</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="frontend/img/light.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Eu sei exatamente oque preciso</h5>
                            <p>Escolhendo esta opção, você poderá escolher cada detalhe especifico dos aparelhos que deseja ver. </h2>
                            </p>
                            <button type="button" class="buttonsp" data-toggle="modal" data-target="#direita">Eu me viro</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- /Section: services -->

@auth

@endauth

<!-- Questionario - Preciso de Ajuda -->
    <div id="esquerda" class="multi-step">

    </div>

<!--/ Questionario - Preciso de Ajuda -->

<!-- Configuração do Range de Tamanho -->
<script>
       $( function() {
          $( "#tamanho-range" ).slider({
            range:true,
            min: 4,
            max: 7,
            step: 0.5,
            values:[4.5,6.5],
            slide: function( event, ui ) {
              $( "#tamanho" ).val( "de " + ui.values[ 0 ] + "″  até " + ui.values[ 1 ] + "″ " );
            },
            create: function(event,ui){
                ui.values[0] = 4.5;
                ui.values[1] = 6.5;
            }
          });
          $( "#tamanho" ).val( "" + $( "#tamanho-range" ).slider( "values", 0 ) +
            "″  até " + $( "#tamanho-range" ).slider( "values", 1 )+ "″ ");
        });
        </script>
<!--/ Configuração do Range de Tamanho -->
<!-- Configuração do Range de Bateria -->
<script>
        $( function() {
           $( "#bateria-range" ).slider({
             range:true,
             min: 1000,
             max: 8000,
             step: 200,
             values:[1500, 4000],
             slide: function( event, ui ) {
               $( "#bateria" ).val( "de " + ui.values[ 0 ] + "mAh  até " + ui.values[ 1 ] + "mAh " );
             },
             create: function(event,ui){
                ui.values[0] = 1500;
                ui.values[1] = 4000;
            }
           });
           $( "#bateria" ).val( "" + $( "#bateria-range" ).slider( "values", 0 ) +
             "mAh  até " + $( "#bateria-range" ).slider( "values", 1 )+ "mAh ");
         } );
</script>
 <!--/ Configuração do Range de Bateria -->
<!-- Configuração do Range de Preço -->
<script>
        $( function() {
           $( "#preco-range" ).slider({
             range:true,
             min: 200,
             max: 10000,
             step: 200,
             values:[1500, 4000],
             slide: function( event, ui ) {
               $( "#preco" ).val( "de " + ui.values[ 0 ] + "R$  até " + ui.values[ 1 ] + "R$ " );
             },
             create: function(event,ui){
                ui.values[0] = 1500;
                ui.values[1] = 4000;
            }
           });
           $( "#preco" ).val( "" + $( "#preco-range" ).slider( "values", 0 ) +
             "R$  até " + $( "#preco-range" ).slider( "values", 1 )+ "R$ ");
         } );
</script>
 <!--/ Configuração do Range de Preço -->
<!-- Configuração do Range de Camera -->
<script>
        $( function() {
           $( "#camera-range" ).slider({
             range:true,
             min: 0,
             max: 64,
             step: 4,
             values:[10, 30],
             slide: function( event, ui ) {
               $( "#camera" ).val( "de " + ui.values[ 0 ] + "MP  até " + ui.values[ 1 ] + "MP " );
             },
             create: function(event,ui){
                ui.values[0] = 10;
                ui.values[1] = 30;
            }
           });
           $( "#camera" ).val( "" + $( "#camera-range" ).slider( "values", 0 ) +
             "MP até " + $( "#camera-range" ).slider( "values", 1 )+ "MP ");
         } );
</script>
 <!--/ Configuração do Range de Camera -->
 <!-- Configuração do Checkbox -->

 <script>
        $( function() {
          $( ".selecionar" ).checkboxradio({
            icon: false
          });
        } );
 </script>
 <!--/ Configuração do Checkbox -->
<!-- Questionario - Eu me viro -->

    <div id="direita" class="multi-step">

    </div>
<!--/ Questionario - Eu me viro -->

</div>

    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Entre em contato</h2>
                                <i class="fa fa-2x fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-2 ">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="boxed-grey">

                        <div id="sendmessage">Sua mensagem foi enviada! Obrigado</div>
                        <div id="errormessage"></div>
                        <form id="contact-form" action="" method="post" role="form" class="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">
                                            Nome</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            E-mail </label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" data-rule="email" data-msg="Digite um e-mail válido" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Assunto</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">
                                            Mensagem</label>
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escreva Algo para nós" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                        Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- /Section: contact -->


    @include('frontend.footer');


    <!-- Core JavaScript Files -->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/jquery.easing.min.js"></script>
    <script src="frontend/js/jquery.scrollTo.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="frontend/js/custom.js"></script>
    <script src="frontend/contactform/contactform.js"></script>

    <script type="text/javascript" src="/js/MultiStep.min.js"></script>
    <script type="text/javascript" src="/js/questionario.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>
