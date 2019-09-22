@extends('admin.main')
@section('title','Memória Ram')
@section('content')

@if(Request::is('admin/memram/editado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Edição feita com sucesso

</div>
@endif
@if(Request::is('admin/memram/salvo'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
        Inclusão feita com sucesso

</div>
@endif
@if(Request::is('admin/memram/excluido'))
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

<a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#adicionar">Incluir Nova Quantidade <i class="fa fa-plus" aria-hidden="true"></i></a>
<div class="media pt-3">
        @if($memoriaRam->isEmpty())
        <section class="row">
                <header class="col-12">
                    <h1 class="col-12 text-center">Não existe memorias RAM cadastradas</h1>
                </header>
        </section>
        @else
        <div class="table-responsive">
        <table class="table table-hover ">
                <thead>
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Quantidade (em GBs)</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($memoriaRam as $memram)
                  <tr>
                    <th scope="row">{{$memram->id}}</th>
                    <td>{{$memram->quantidade}}</td>
                    <td class='d-flex flex-row'><a name="edit" id="" class="btn btn-primary" style='margin-right: 10px' href="#" role="button" data-toggle="modal" data-target="#edit{{$memram->id}}"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar" ></i>
                        <a name="edit" id="" class="btn btn-danger" href="#" role="button"  data-toggle="modal" data-target="#excluir{{$memram->id}}" ><i class="fas fa-trash " data-toggle="tooltip" data-placement="top" title="Excluir"></i></a></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

</div>
</div>
<div class="d-flex justify-content-center">
        {{ $memoriaRam->links() }}
</div>
<!-- Modal de Inclusão -->
<div class="modal fade" id="adicionar" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Memória Interna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/memram/adicionar" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Quantidade:</label>
                  <input type="number" step="0.1" class="form-control" id="recipient-name" name='quantidade'>
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
@foreach($memoriaRam as $memram)
<div class="modal fade" id="edit{{$memram->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Memória Interna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/memram/alterar/{{$memram->id}}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Quantidade:</label>
                  <input type="number" step="0.1" class="form-control" id="recipient-name" name='quantidade' value='{{$memram->quantidade}}'>
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
@foreach($memoriaRam as $memram)
<div class="modal fade" id="excluir{{$memram->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
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
                  <label for="recipient-name" class="col-form-label">Quantidade: {{$memram->quantidade}}</label>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <form action="/admin/memram/excluir/{{$memram->id}}" method="post">
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
@endif
@endsection
