@extends('admin.main')
@section('title','Sistema Operacional')
@section('content')

@if(Request::is('admin/sisop/editado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Edição feita com sucesso

</div>
@endif
@if(Request::is('admin/sisop/salvo'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Inclusão feita com sucesso

</div>
@endif
@if(Request::is('admin/sisop/excluido'))
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

<a name="" id="mainbutton" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#adicionar">Incluir Novo Sistema Operacional <i class="fa fa-plus" aria-hidden="true"></i></a>
<div class="media pt-3">
        @if($sistemasOperacionais->isEmpty())
        <section class="row">
                <header class="col-12">
                    <h1 class="col-12 text-center">Não existem Sistemas Operacionais cadastrados</h1>
                </header>
        </section>
        @else
        <div class="table-responsive">
        <table class="table table-hover ">
                <thead>
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Nome</th>
                    <th scope="col">Versão</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($sistemasOperacionais as $sisop)
                  <tr>
                    <th scope="row">{{$sisop->id}}</th>
                    <td>{{$sisop->nome}}</td>
                    <td>{{$sisop->versao}}</td>
                    <td class='d-flex flex-row'><a name="edit" id="" class="btn btn-primary" style='margin-right: 10px' href="#" role="button" data-toggle="modal" data-target="#edit{{$sisop->id}}"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar" ></i>
                        <a name="edit" id="" class="btn btn-danger" href="#" role="button"  data-toggle="modal" data-target="#excluir{{$sisop->id}}" ><i class="fas fa-trash " data-toggle="tooltip" data-placement="top" title="Excluir"></i></a></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

</div>
</div>
<div class="d-flex justify-content-center">
        {{ $sistemasOperacionais->links() }}
</div>
@endif
<!-- Modal de Inclusão -->
<div class="modal fade" id="adicionar" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Sistema Operacional</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/sisop/adicionar" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control" id="recipient-name" name='nome'>
                  <label for="recipient-name" class="col-form-label">Versão:</label>
                  <input type="text" class="form-control" id="recipient-name" name='versao'>
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
@foreach($sistemasOperacionais as $sisop)
<div class="modal fade" id="edit{{$sisop->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Sistema Operacional</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/sisop/alterar/{{$sisop->id}}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control" id="recipient-name" name='nome' value='{{$sisop->nome}}'>
                  <label for="recipient-name" class="col-form-label">Versão:</label>
                  <input type="text" class="form-control" id="recipient-name" name='versao' value='{{$sisop->versao}}'>
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
@foreach($sistemasOperacionais as $sisop)
<div class="modal fade" id="excluir{{$sisop->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
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
                  <label for="recipient-name" class="col-form-label">nome: {{$sisop->nome}}</label>
                  <label for="recipient-name" class="col-form-label">versão: {{$sisop->versao}}</label>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <form action="/admin/sisop/excluir/{{$sisop->id}}" method="post">
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
@endsection
