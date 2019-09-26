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
                                <div class="avatar"><img src="/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
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
                                <div class="avatar"><img src="/img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

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
                                <div class="avatar"><img src="/img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

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
                                <div class="avatar"><img src="/img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

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
                            <img src="/img/think.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Me ajude a escolher</h5>
                            <p>Escolhendo esta opção, nós te mostraremos as melhores opções de aparelhos com base em suas respostas em um rápido questionário </p>
                            <button type="button" class="buttonsp" data-toggle="modal" data-target="#esquerda" id='btesquerda' >Preciso de Ajuda</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="/img/light.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Eu sei exatamente oque preciso</h5>
                            <p>Escolhendo esta opção, você poderá escolher cada detalhe especifico dos aparelhos que deseja ver. </h2>
                            </p>
                            <button type="button" class="buttonsp" data-toggle="modal" data-target="#direita" id='btdireita'>Eu me viro</button>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                    $('#btesquerda').on('click',()=>{
                        //armazena a informaçao que o usuário escolheu o form da esquerda
                        $('.opcaoUsuario').attr('value', 'esquerda');
                    })
                    $('#btdireita').on('click',()=>{
                        //armazena a informaçao que o usuário escolheu o form da direita
                        $('.opcaoUsuario').attr('value', 'direita');
                    })
                </script>
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
              $('#tamanhoTelaDe').val( ui.values[ 0 ]);
              $('#tamanhoTelaAte').val(ui.values[ 1 ]);
            },
            create: function(event,ui){
                ui.values[0] = 4.5;
                ui.values[1] = 6.5;
            }
          });
          $( "#tamanho" ).val( "" + $( "#tamanho-range" ).slider( "values", 0 ) +
            "″  até " + $( "#tamanho-range" ).slider( "values", 1 )+ "″ ");
            $('#tamanhoTelaDe').val($( "#tamanho-range" ).slider( "values", 0 ));
            $('#tamanhoTelaAte').val($( "#tamanho-range" ).slider( "values", 1 ));
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
               $('#bateriaDe').val(ui.values[ 0 ]);
              $('#bateriaAte').val(ui.values[ 1 ]);
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
               $('#precoDe').val(ui.values[ 0 ]);
              $('#precoAte').val(ui.values[ 1 ]);
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
               $('#cameraDe').val(ui.values[ 0 ]);
              $('#cameraAte').val(ui.values[ 1 ]);
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

<!-- Modal - Caso encontre erros no preenchimento -->

@if ($errors->any())
<script type="text/javascript">
    $(window).on('load',function(){
        $('#listarErros').modal('show');
    });
</script>
<div class="modal fade" id="listarErros" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Ops... alguma coisa deu errado</h3>
            </div>
            <div class="modal-body">
                    <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                </div>
                <div class="modal-footer">
                        <a href="#" class="close" data-dismiss="modal" aria-label="close">Fechar</a>
                </div>
            </div>
        </div>
</div>
@endif

<!-- / Modal - Caso encontre erros no preenchimento -->
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
                    <p>&copy;PhoneVerse.</p>
                    <div class="credits">
                        
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFAQ">
  Perguntas Frequentes
</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal FAQ -->
<div class="modal fade" id="modalFAQ" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Principais dúvidas:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

              <div class="container">
                <div class="accordion" id="accordionExample">  
                  <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Quais marcas ha disponíveis no PhoneVerse?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Trabalhamos com todas as marcas atuais do mercado.
                    </div>
                  </div>
                  </div>
                    <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Alem de tudo o que ha disponível em facilitar a busca de um celular, em que mais a PhoneVerse pode me beneficiar?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Se compartilhar nosso link com um amigo que fizer uma compra conosco,nós creditamos 20% do valor da compra para você.
                    </div>
                  </div>
                    </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Como é feito esse sistema de pagamento pela indicação?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      Através do cadastro da pessoa a quem você esta indicando, ele deverá preencher o e-mail e dados básicos seu e nosso sistema
                      irá enviar os 20% do valor para a sua conta corrente cadastrada.
                    </div>
                  </div>
                </div>
                   <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Como a PhoneVerse foi criada?
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            Através de um projeto do curso de Desenvolvimento Web Full Stack da Digital House.
                        </div>
                      </div>
                    </div>
                  </div> 
                <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Em que Ano a PhoneVerse foi desenvolvida?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                          Iniciamos o conceito e o desenvolvimento da web em 2019.
                      </div>
                    </div>
                </div>
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                          aria-controls="collapseSix">
                          A Phoneverse será somente especializada em smartphones?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                          Sim, porém futuramente vamos trabalhar com tablets e notebooks também. 
                      </div>
                    </div>
                  </div>
                <div class="card">
                  <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven">
                        Onde posso encontrar informações técnicas sobre um telefone?
                      </button>
                    </h2>
                  </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                          Na ficha do aparelho, você vai encontrar uma guia "DESCRIÇÃO" que contém todas as informações e funções do telefone.
                      </div>
                    </div>
                </div>
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                          aria-controls="collapseEight">
                          Encontrei uma informação errada em um dos celulares, como posso solicitar alteração?
                        </button>
                      </h2>
                    </div>
                      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                          Basta preencher o formulário localizado na página principal com o nome a ser alterado e a sugestão.
                        </div>
                      </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingNine">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                          aria-controls="collapseNine">
                            Não encontrei um celular aqui! Como solicito informações ?
                        </button>
                      </h2>
                    </div>
                      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                          A Phoneverse vai adicionando aos poucos os celulares mais recentes assim que todas as informações estiverem disponíveis. De qualquer maneira basta nos notificar pelo formulário de contato.
                        </div>
                    </div>
                  </div>
                <div class="card">
                  <div class="card-header" id="headingTen">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false"
                        aria-controls="collapseTen">
                        Li tudo mas ainda assim, não encontrei uma resposta para minha dúvida, o que eu faço?
                      </button>
                    </h2>
                  </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                  <div class="card-body">
                    Basta preencher o formulário abaixo e nos dizer do que precisa. Não se esqueça de suas informações e contato! E em breve você receberá uma resposta de nossa equipe por e-mail.
                  </div>
                </div>
              </div>    
              </div>
            </div>
        
        <!-- Aqui vai o conteúdo das perguntas frequentes -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
