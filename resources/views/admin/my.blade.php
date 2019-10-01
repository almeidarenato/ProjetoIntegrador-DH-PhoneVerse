@extends('admin.main')
@section('title','Minhas Respostas')

@section('head-script')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src={{asset("js/jquery.counterup.min.js")}}></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#tabs" ).tabs();
    } );
    </script>
@endsection

@section('content')
@if(Request::is('admin/user/editado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Edição feita com sucesso

</div>
@endif
@if(Request::is('admin/user/salvo'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Inclusão feita com sucesso

</div>
@endif
@if(Request::is('admin/user/excluido'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Exclusão feita com sucesso

</div>
@endif
@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
        @endforeach
    </ul>

</div>
@endif
<div class="my-3 p-3 bg-white rounded box-shadow">
        <h5>Formulários</h5>
    <div class="media pt-3">

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-dadospessoais-tab" data-toggle="pill" href="#v-pills-dadospessoais" role="tab" aria-controls="v-pills-dadospessoais" aria-selected="true">Dados Pessoais</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-precisoajuda" role="tab" aria-controls="v-pills-precisoajuda" aria-selected="false">Questionário 1 - Preciso de Ajuda</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Questionário 2 - Eu me viro</a>
                  </div>
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-dadospessoais"  role="tabpanel" aria-labelledby="#v-pills-dadospessoais">
                           <div class="container">
                            <p><b>Nome:</b> {{Auth::user()->name}}</p>
                            <p><b>E-mail:</b> {{Auth::user()->email}}</p>
                            <p><b>Data Nascimento:</b> {{date('d-m-Y',strtotime(Auth::user()->dtNascimento))}} </p>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-precisoajuda" role="tabpanel" aria-labelledby="v-pills-precisoajuda">
                            <div class="container">
                                    <p><b>Aparelho Atual:</b> <input type="text" name="aparelho" id="aparelho" value={{Auth::user()->aparelho}}></p>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                  </div>
    </div>
</div>

@endsection
{{-- {                            {Auth::user()->name}}
                            {{Auth::user()->aparelho}}
                            {{date('d-m-Y',strtotime(Auth::user()->dtNascimento))}} --}}
{{-- <a name="" id="" class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#adicionar">Realizar nova pesquisa <i class="fa fa-plus" aria-hidden="true"></i></a>
<div class="media pt-3">
        @if(->isEmpty())
        <section class="row">
                <header class="col-12">
                    <h1 class="col-12 text-center">Não existe Slot Sims cadastrados</h1>
                </header>
        </section>
        @else
        <div class="table-responsive">
        <table class="table table-hover ">
                <thead>
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Slot Sim</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($slotSim as $slotsim)
                  <tr>
                    <th scope="row">{{$slotsim->id}}</th>
                    <td>{{$slotsim->quantidade}}</td>
                    <td class='d-flex flex-row'><a name="edit" id="" class="btn btn-primary" style='margin-right: 10px' href="#" role="button" data-toggle="modal" data-target="#edit{{$slotsim->id}}"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar" ></i>
                        <a name="edit" id="" class="btn btn-danger" href="#" role="button"  data-toggle="modal" data-target="#excluir{{$slotsim->id}}" ><i class="fas fa-trash " data-toggle="tooltip" data-placement="top" title="Excluir"></i></a></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

</div>
</div>
<div class="d-flex justify-content-center">
        {{ $slotSim->links() }}
</div>
@endif
<!-- Modal de Inclusão -->
<div class="modal fade" id="adicionar" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Slot Sim</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/slotsim/adicionar" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Slot:</label>
                  <input type="text" class="form-control" id="recipient-name" name='quantidade'>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
          </div>
        </div>
      </div>
<!--/ Modal de Inclusão -->
<!-- Modal de Edição -->
@foreach($slotSim as $slotsim)
<div class="modal fade" id="edit{{$slotsim->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Slot Sim</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/slotsim/alterar/{{$slotsim->id}}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Slot Sim:</label>
                  <input type="text" class="form-control" id="recipient-name" name='quantidade' value='{{$slotsim->quantidade}}'>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      @endforeach
<!--/ Modal de Edição -->

<!-- Modal de Exclusão -->
@foreach($slotSim as $slotsim)
<div class="modal fade" id="excluir{{$slotsim->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Deseja Realmente Excluir ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Slot Sim: {{$slotsim->quantidade}}</label>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <form action="/admin/slotsim/excluir/{{$slotsim->id}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-primary">Excluir</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      @endforeach
<!--/ Modal de Exclusão -->

@endsection --}}
