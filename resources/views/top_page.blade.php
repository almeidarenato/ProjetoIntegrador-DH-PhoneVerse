<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <link href="css/top3.css" rel="stylesheet">
        <script src="js/app.js"></script>
        <title>Os 3 melhores!</title>
    </head>
    <body>

    <header class="section-header">

    
            @include('header2');
          
        </header> 
          
              <!-- ========================= SECTION CONTENT ========================= -->
              <section class="section-content bg padding-y-sm">
                  <div class="container">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  
                                  <div class="col-md-3-24"> <strong>Filtrar por:</strong> </div> <!-- col.// -->
                                  <div class="col-md-21-24">
                                      <ul class="list-inline">
                                          <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tipo de fornecedor </a>
                                              <div class="dropdown-menu p-3" style="max-width:400px;">	
                                                    <label class=" form-check">
                                                  <a href="#">
                                                      <input type="checkbox" class="form-check-input">Bom fornecedor
                                                  </a>
                                                  </label>
                                                  <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                      </div>

                                                  <label class="form-check">
                                                      <a href="#">
                                                          <input type="checkbox" class="form-check-input"> Melhor fornecedor
                                                      </a>
                                                  </label>
                                                  <label class="form-check">
                                                      <a href="#">
                                                          <input type="checkbox" class="form-check-input"> Novo fornecedor
                                                      </a>
                                                  </label>
                                              </div> <!-- dropdown-menu.// -->
                                          </li>
                                          <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Country </a>
                                              <div class="dropdown-menu p-3" style="max-width:400px;">	
                        <label class=" form-check">
                                                  <a href="#">
                                                      <input type="checkbox" class="form-check-input"> China
                                                  </a>
                                                  </label>
                                                  <label class="form-check">
                                                      <a href="#">
                                                          <input type="checkbox" class="form-check-input"> Japão
                                                      </a>
                                                  </label>
                                                  <label class="form-check">
                                                      <a href="#">
                                                          <input type="checkbox" class="form-check-input"> Urbequistão
                                                      </a>
                                                  </label>
                                                  <label class="form-check">
                                                      <a href="#">
                                                          <input type="checkbox" class="form-check-input"> Russia
                                                      </a>
                                                  </label>
                                              </div> <!-- dropdown-menu.// -->
                                              </li>
                                              <li class="list-inline-item"><a href="#">Tipo do smartphone</a></li>
                                              <li class="list-inline-item"><a href="#">Marca</a></li>
                                              <li class="list-inline-item"><a href="#">Cor</a></li>
                                              <li class="list-inline-item"><a href="#">Tamanho</a></li>
                                              <li class="list-inline-item">
                                                  <div class="form-inline">
                                                      <label class="mr-2">Preço</label>
                                                          <input class="form-control form-control-sm" placeholder="Min" type="number">
                                                              <span class="px-2"> - </span>
                                                          <input class="form-control form-control-sm" placeholder="Max" type="number">
                                                      <button type="submit" class="btn btn-sm ml-2">Ok</button>
                                                  </div>
                                              </li>
                                      </ul>
                                  </div> <!-- col.// -->
                              </div> <!-- row.// -->
                          </div> <!-- card-body .// -->
                      </div> <!-- card.// -->
          

          
          
          <div class="card-deck">
          
                      <div class="card">
                          <img class="card-img-top" src="img/o_melhor.jpg" alt="O melhor!">
                              <div class="card-body">
                                  <h5 class="card-title">Opção 1</h5>
                                  <p class="card-text">O melhor!</div>
                              <div class="card-footer">
                                  <small class="text-muted"></small>
                              </div>
                      </div>
           
           
           
                      <div class="card">
                          <img class="card-img-top" src="img/maisoumenos.jpg" alt="O mais ou menos!">
                              <div class="card-body">
                                  <h5 class="card-title">Opção 2</h5>
                                      <p class="card-text">O mais ou menos!</div>
                              <div class="card-footer">
                                  <small class="text-muted"></small>
                              </div>
                      </div>
            
            
                      <div class="card">
                          <img class="card-img-top" src="img/vaiqne.jpg" alt="Esse é piorzinho.... Mas....  Vai que né?">
                              <div class="card-body">
                                  <h5 class="card-title">Opção 3</h5>
                                  <p class="card-text">Esse é piorzinho.... Mas....  Vai que né?</div>
                              <div class="card-footer">
                                  <small class="text-muted"></small>
                              </div>
                      </div>
          </div>
          </div>
          </div> <!-- row.// -->
                  </div><!-- container // -->
              </section>
              <!-- ========================= SECTION CONTENT .END// ========================= -->

<div class="accordion" id="accordionExample">
        <div class="card">
        <div class="card-header d-flex justify-content-center" id="headingOne">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Ver mais...
            </button>
            </h5>
        </div>
        
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

<div class="container">
    <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="img/o_melhor.jpg" alt="O melhor!">
                    <div class="card-body">
                        <h5 class="card-title">Opção 1</h5>
                        <p class="card-text">O melhor!</div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
            </div>
    
    
            <div class="card">
                <img class="card-img-top" src="img/maisoumenos.jpg" alt="O mais ou menos!">
                    <div class="card-body">
                        <h5 class="card-title">Opção 2</h5>
                            <p class="card-text">O mais ou menos!</div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
            </div>
    
    
            <div class="card">
                <img class="card-img-top" src="img/vaiqne.jpg" alt="Esse é piorzinho.... Mas....  Vai que né?">
                    <div class="card-body">
                        <h5 class="card-title">Opção 3</h5>
                        <p class="card-text">Esse é piorzinho.... Mas....  Vai que né?</div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
            </div>
    </div>
    
    <div class="card-deck">
    
        <div class="card">
            <img class="card-img-top" src="img/o_melhor.jpg" alt="O melhor!">
                <div class="card-body">
                    <h5 class="card-title">Opção 1</h5>
                    <p class="card-text">O melhor!</div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
        </div>
    
    
        <div class="card">
            <img class="card-img-top" src="img/maisoumenos.jpg" alt="O mais ou menos!">
                <div class="card-body">
                    <h5 class="card-title">Opção 2</h5>
                        <p class="card-text">O mais ou menos!</div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
        </div>
    
    
        <div class="card">
            <img class="card-img-top" src="img/vaiqne.jpg" alt="Esse é piorzinho.... Mas....  Vai que né?">
                <div class="card-body">
                    <h5 class="card-title">Opção 3</h5>
                    <p class="card-text">Esse é piorzinho.... Mas....  Vai que né?</div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
        </div>
    </div>
    
    <div class="card-deck">
    
    <div class="card">
        <img class="card-img-top" src="img/o_melhor.jpg" alt="O melhor!">
            <div class="card-body">
                <h5 class="card-title">Opção 1</h5>
                <p class="card-text">O melhor!</div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
    </div>
    
    
    <div class="card">
        <img class="card-img-top" src="img/maisoumenos.jpg" alt="O mais ou menos!">
            <div class="card-body">
                <h5 class="card-title">Opção 2</h5>
                    <p class="card-text">O mais ou menos!</div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
    </div>
    
    
    <div class="card">
        <img class="card-img-top" src="img/vaiqne.jpg" alt="Esse é piorzinho.... Mas....  Vai que né?">
            <div class="card-body">
                <h5 class="card-title">Opção 3</h5>
                <p class="card-text">Esse é piorzinho.... Mas....  Vai que né?</div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>
    </div>
    </div>
</div>
            
            </div>
        </div>
        </div>

            @include('frontend.footer');
    
    
    </body>

</html>




