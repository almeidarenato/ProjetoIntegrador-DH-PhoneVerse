var loginName = "fulano";

$(document).ready(function() {
    $(".modal").MultiStep({
        title: "Questionário",
        data: [
            {
                content: `<h5> Olá <u>${loginName}</u> , tudo bem? Nós somos a Phoneverse e estamos aqui para te ajudar a encontrar seu novo celular. </h4>`,
                label: "Custom label"
            },
            {
                content: `<label for='nome'>1 - Posso pegar sua idade?</label>
                    <input type="text" name='nome' class="form-control" id="nome" aria-describedby="emailHelp" placeholder="29">
                    `
            },
            {
                content: `<label for='nome'>2 - Qual seu aparelho atual?</label>
                    <input type="text" name='nome' class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Semsun Pad X">
                    `
            },
            {
                content: `<div class="form-group"> <label>2 - Agora nos conte o motivo de você precisar de um novo aparelho.</label>


                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customCheck8" name="motivoRadio" >
                        <label class="custom-control-label" for="customCheck8">Meu atual quebrou :(</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customCheck9" name="motivoRadio">
                        <label class="custom-control-label" for="customCheck9">Meu celular vive na tomada, parece telefone fixo (bateria não dura)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customCheck10" name="motivoRadio">
                        <label class="custom-control-label" for="customCheck10">Meu celular trava muito!</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customCheck11" name="motivoRadio">
                        <label class="custom-control-label" for="customCheck11">Enjoei da cara dele</label>
                    </div> </div>`
            },
            {
                content: `<div class="form-group"> <label>3 - Você usa mais o celular para:</label>


                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customCheck8" name="usoCelular" >
                    <label class="custom-control-label" for="customCheck8">Jogar</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customCheck9" name="usoCelular">
                    <label class="custom-control-label" for="customCheck9">Acessar redes sociais e ouvir musica</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customCheck10" name="usoCelular">
                    <label class="custom-control-label" for="customCheck10">Assistir vídeos e ler</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customCheck11" name="usoCelular">
                    <label class="custom-control-label" for="customCheck11">Trabalhar</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customCheck11" name="usoCelular">
                    <label class="custom-control-label" for="customCheck11">Tirar Fotos e Gravar vídeos</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customCheck11" name="usoCelular">
                    <label class="custom-control-label" for="customCheck11">Fazer Ligações (sério? O.o)</label>
                </div>
                </div>`
            }
        ],
        final: `<center><button class="btn btn-primary" type='submit'> Conferir meus Resultados </button></center>`,
        modalSize: "lg"
    });
});
$(".modal-backdrop").remove();
