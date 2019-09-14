$(document).ready(function() {
    $("#esquerda").MultiStep({
        title: "Questionário",
        data: [
            {
                content: `
                <div class="form-group">
                <input type='hidden' class="opcaoUsuario" value='' name='opcaousuario'>
                <p>Qual o seu nome?</p>
                <label for='nome'>Nome</label>
                <input type="text" name='nome'  class="form-control" id="nomeUsuario" aria-describedby="emailHelp" placeholder="Fulano da Silva Sauro" >
                </div>
                `
            },
            {
                content: `

                <p> Olá <b id='mostraNome'></b>, tudo bem? Nós somos a Phoneverse e estamos aqui para te ajudar a encontrar seu novo celular. </p>

                `,
                label: "Custom label"
            },
            {
                content: `<label for='nome'>1 - Qual sua Data de Nascimento?</label>
                    <input type="date" name='dtNascimento' class="form-control" id="nome" aria-describedby="emailHelp" placeholder="29">
                    `
            },
            {
                content: `<label for='nome'>2 - Qual seu aparelho atual?</label>
                    <input type="text" name='aparelho' class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Semsun Pad X" />
                    `
            },
            {
                content: `
                <div class="form-group"> <label>3 - Agora nos conte o motivo de você precisar de um novo aparelho.</label>


                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="resp3op1" name="resp3" value='Meu atual quebrou'>
                        <label class="custom-control-label" for="resp3op1">Meu atual quebrou :(</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="resp3op2" name="resp3" value='Meu celular vive na tomada, parece telefone fixo (bateria não dura)'>
                        <label class="custom-control-label" for="resp3op2">Meu celular vive na tomada, parece telefone fixo (bateria não dura)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="resp3op3" name="resp3" value='Meu celular trava muito!'>
                        <label class="custom-control-label" for="resp3op3">Meu celular trava muito!</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="resp3op4" name="resp3" value='Enjoei da cara dele'>
                        <label class="custom-control-label" for="resp3op4">Enjoei da cara dele</label>
                    </div> </div>`
            },
            {
                content: `<div class="form-group"> <label>4 - Você usa mais o celular para:</label>

                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="resp4op1" name="resp4" value='Jogar' >
                    <label class="custom-control-label" for="resp4op1">Jogar</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="resp4op2" name="resp4" value='Acessar redes sociais e ouvir musica'>
                    <label class="custom-control-label" for="resp4op2">Acessar redes sociais e ouvir musica</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="resp4op3" name="resp4" value='Assistir vídeos e ler'>
                    <label class="custom-control-label" for="resp4op3">Assistir vídeos e ler</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="resp4op4" name="resp4" value='Trabalhar<'>
                    <label class="custom-control-label" for="resp4op4">Trabalhar</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="resp4op5" name="resp4" value='Tirar Fotos e Gravar vídeos'>
                    <label class="custom-control-label" for="resp4op5">Tirar Fotos e Gravar vídeos</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="resp4op6" name="resp4" value='Fazer Ligações (sério? O.o)'>
                    <label class="custom-control-label" for="resp4op6">Fazer Ligações (sério? O.o)</label>
                </div>
                </div>`
            },
            {
                content: `

                <p>Pra terminar que tal fornecer um e-mail e senha? Assim já te cadastramos.</p>
                <label for='nome'>E-mail:</label>
                <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail" autocomplete="username">
                <label for='nome'>Crie uma senha:</label>
                <input type="password" name='senha' class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha" autocomplete="new-password">
                <input type="checkbox" class="custom-control-input" id="naoQuero" name="naoQuero">
                <label class="custom-control-label" for="naoQuero">Não quero me cadastrar no momento</label>`
            }
        ],
        //final: `<center><button class="btn btn-primary" type='submit'> Conferir meus Resultados </button></center>`,
        final: `<center> Carregando Resultados </center>`,
        modalSize: "lg"
    });

    $("#direita").MultiStep({
        title: "Questionário",
        data: [
            {
                content: `
                <input type='hidden' class="opcaoUsuario" value='' name='opcaousuario'>
                <p>Qual o seu nome?</p>
                <label for='nomeDireita'>Nome</label>
                <input type="text" name='nomeDireita'  class="form-control" id="nomeUsuarioDireita" aria-describedby="emailHelp" placeholder="Fulano da Silva Sauro">`
            },
            {
                content: `
                <p> Olá <b id='mostraNomeDireita'></b>, tudo bem? Nós somos a Phoneverse e estamos aqui para te ajudar a encontrar seu novo celular. </p>
                `,
                label: "Custom label"
            },
            {
                content: `<label >1 - Qual sua Data de Nascimento?</label>
                    <input type="date" name='dtNascimentoDireita' class="form-control" id="dtNascimento" aria-describedby="emailHelp" placeholder="29">
                    `
            },
            {
                content: `
                <div class="form-group">
                <label>2 - Por quais marcas você tem mais preferência?</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="marcaMotorola"  name='marcaMotorola'>
                    <label class="custom-control-label" for="marcaMotorola">Motorola</label>
                </div>
                 <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="marcaApple" name='marcaApple' value='true';>
                    <label class="custom-control-label" for="marcaApple">Apple</label>
                 </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="marcaSamsung" name='marcaSamsung'>
                    <label class="custom-control-label" for="marcaSamsung">Samsung</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="marcaXiaomi" name='marcaXiaomi'>
                    <label class="custom-control-label" for="marcaXiaomi">Xiaomi</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="marcaLG" name='marcaLG'>
                    <label class="custom-control-label" for="marcaLG">LG</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="marcaAsus" name='marcaAsus'>
                    <label class="custom-control-label" for="marcaAsus">Asus</label>
                </div>
            </div>`
            },
            {
                content: `
                <div class="form-group">
                <label>3 - Quais versões de IOS/ Android você busca (no mínimo).</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="versaoIos12" name='versaoIos12' >
                    <label class="custom-control-label" for="versaoIos12">iOs 12</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="versaoAndroid7" name='versaoAndroid7' >
                    <label class="custom-control-label" for="versaoAndroid7">Android 7</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="versaoAndroid8" name='versaoAndroid8'>
                    <label class="custom-control-label" for="versaoAndroid8">Android 8</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="versaoAndroid9" name='versaoAndroid9'>
                    <label class="custom-control-label" for="versaoAndroid9">Android 9</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="versaoAndroid10" name='versaoAndroid10'>
                    <label class="custom-control-label" for="versaoAndroid10">Android 10</label>
                </div>
                </div>`
            },
            {
                content: `<div class="form-group">
                <label>4 - Nos diga qual sua preferencia por Processador</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="procApple" class='selecionar' name='procApple'>
                    <label class="custom-control-label" for="procApple">Apple A series</label>
                </div>
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="selecionar" id="procKirin" class='selecionar' name='procKirin'>
                <label class="custom-control-label" for="procKirin">HiSilicon Kirin</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="procSnapdragon" class='selecionar' name='procSnapdragon'>
                    <label class="custom-control-label" for="procSnapdragon">Qualcomm Snapdragon</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="selecionar" id="procMediaTek" class='selecionar' name='procMediaTek'>
                    <label class="custom-control-label" for="procMediaTek">Mediatek Helio</label>
                </div>
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="selecionar" id="procExynos" class='selecionar' name='procExynos'>
                <label class="custom-control-label" for="procExynos">Samsung Exynos</label>
            </div>
            </div>`
            },
            {
                content: `
                <h5>5 - Caracteristicas</h5>
                <div class="form-group">
                <p>
                <label for='tamanho'>5.1 - Tamanho de Tela (em polegadas):</label>
                    <input type="text" id="tamanho" name='tamanhoTela' readonly style="border:0; color:#f6931f; font-weight:bold; ">
                    <input type="hidden" id="tamanhoTelaDe" name='tamanhoTelaDe' value='0' >
                    <input type="hidden" id="tamanhoTelaAte" name='tamanhoTelaAte' value='0' >
                </p>
                    <div id="tamanho-range"></div>

                <br>
                <p>
                    <label for='bateria'>5.2 - Tamanho de Bateria (em miliampere):</label>
                    <input type="text" id="bateria" size="30" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <input type="hidden" id="bateriaDe" name='bateriaDe' value='0' >
                    <input type="hidden" id="bateriaAte" name='bateriaAte' value='0' >
                </p>
                    <div id="bateria-range"></div>
                <br>
                <p>
                    <label for='camera'>5.3 - Camera (em megapixel):</label>
                    <input type="text" id="camera" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <input type="hidden" id="cameraDe" name='cameraDe' value='0' >
                    <input type="hidden" id="cameraAte" name='cameraAte' value='0' >
                </p>
                    <div id="camera-range"></div>
                <br>
                <p>
                    <label for='camera'>5.4 - Preço (em R$):</label>
                    <input type="text" id="preco" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    <input type="hidden" id="precoDe" name='precoDe' value='0' >
                    <input type="hidden" id="precoAte" name='precoAte' value='0' >
                </p>
                    <div id="preco-range"></div>
                <br>
                <label for='memoriaInterna'>5.5 Memória Interna:</label>
                    <fieldset id='memoriaInterna'>
                        <label for="memoriaInterna-1">16 GB ou menos</label>
                        <input type="radio" name="memoriaInterna" id="memoriaInterna-1" class='selecionar' value='16'>
                        <label for="memoriaInterna-2">32 GB</label>
                        <input type="radio" name="memoriaInterna" id="memoriaInterna-2" class='selecionar' value='32'>
                        <label for="memoriaInterna-3">64 GB</label>
                        <input type="radio" name="memoriaInterna" id="memoriaInterna-3" class='selecionar' value='64'>
                        <label for="memoriaInterna-4">128 GB ou Mais</label>
                        <input type="radio" name="memoriaInterna" id="memoriaInterna-4" class='selecionar' value='128'>
                    </fieldset>
                    <br>
                <label for='memoriaInterna'>5.6 Memória Ram:</label>
                    <fieldset id='memoriaRam'>
                        <label for="memoriaRam-1">1 GB ou menos</label>
                        <input type="radio" name="memoriaRam" id="memoriaRam-1" class='selecionar' value='1'>
                        <label for="memoriaRam-2">2 GB</label>
                        <input type="radio" name="memoriaRam" id="memoriaRam-2" class='selecionar' value='2'>
                        <label for="memoriaRam-3">3 GB</label>
                        <input type="radio" name="memoriaRam" id="memoriaRam-3" class='selecionar' value='3'>
                        <label for="memoriaRam-4">4 GB ou Mais</label>
                        <input type="radio" name="memoriaRam" id="memoriaRam-4" class='selecionar' value='4'>
                    </fieldset>

                </div>

                `
            },
            {
                content: `

                <p>Pra terminar que tal fornecer um e-mail e senha? Assim já te cadastramos.</p>
                <label for='nome'>E-mail:</label>
                <input type="email" name='emailDireita' class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail" autocomplete="username">
                <label for='nome'>Crie uma senha:</label>
                <input type="password" name='senhaDireita' class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha" autocomplete="new-password">
                <input type="checkbox" class="custom-control-input" id="naoQuero" name="naoQuero">
                <label class="custom-control-label" for="naoQuero">Não quero me cadastrar no momento</label>`
            }
        ],
        //final: `<center><button class="btn btn-primary" type='submit'> Conferir meus Resultados </button></center>`,
        final: `<center> Carregando Resultados </center>`,
        modalSize: "lg"
    });
});
$(".modal-backdrop").remove();
