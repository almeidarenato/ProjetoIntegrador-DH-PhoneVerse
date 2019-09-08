$(document).ready(function() {
    $(".modal").MultiStep({
        title: "Questionário",
        data: [
            {
                content: `
                <h5>Qual o seu nome?</h5>
                <label for='nome'>Nome</label>
                <input type="text" name='nome'  class="form-control" id="nomeUsuario" aria-describedby="emailHelp" placeholder="Fulano da Silva Sauro">`
            },
            {
                content: `
                <h5 id='teste'> Olá <b id='mostraNome'></b>, tudo bem? Nós somos a Phoneverse e estamos aqui para te ajudar a encontrar seu novo celular. </h5>
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
                    <input type="text" name='aparelho' class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Semsun Pad X">
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
                <label for='nome'>E-mail:</label>
                <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                <label for='nome'>Crie uma senha:</label>
                <input type="password" name='senha' class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha">
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
