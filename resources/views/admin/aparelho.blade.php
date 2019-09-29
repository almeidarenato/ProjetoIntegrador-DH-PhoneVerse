@extends('admin.main')
@section('title','Aparelhos')
@section('content')
@if(Request::is('admin/aparelho/editado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Edição feita com sucesso

</div>
@endif
@if(Request::is('admin/aparelho/salvo'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Inclusão feita com sucesso

</div>
@endif
@if(Request::is('admin/aparelho/excluido'))
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

  <a name="" id="" class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#adicionar">Incluir Novo Aparelho Celular <i class="fa fa-plus" aria-hidden="true"></i></a>
  <div class="media pt-3">
    @if($aparelhos->isEmpty())
    <section class="row">
      <header class="col-12">
        <h1 class="col-12 text-center">Não existem Aparelhos celulares cadastrados</h1>
      </header>
    </section>
    @else
    <div class="table-responsive">
      <table class="table table-hover ">
        <thead>
          <tr>
            <th scope="col">ID </th>
            <th scope="col">Modelo</th>
            <th scope="col">Imagem</th>
            <th scope="col">Marca</th>
            <th scope="col">Sis. Oper.</th>
            <th scope="col">Processador</th>
            <th scope="col">Mem. Interna</th>
            <th scope="col">Mem. Ram</th>
            <th scope="col">Cam. Frontal</th>
            <th scope="col">Cam. Traseira</th>
            <th scope="col">Slot Sim</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($aparelhos as $aparelho)
          <tr>
            <th scope="row">{{$aparelho->id}}</th>
            <td>{{$aparelho->modelo}}</td>
            <td>
              <div class="zoom"><img src="{{asset($aparelho->imagem)}}" width="80" height="80"></div>
            </td>
            <td>{{$aparelho->marca->nome}}</td>
            <td>{{$aparelho->sistemaoperacional->nome}} - {{$aparelho->sistemaoperacional->versao}}</td>
            <td>{{$aparelho->processador->modelo}}</td>
            <td>{{$aparelho->memoriainterna->quantidade}}</td>
            <td>{{$aparelho->memoriaram->quantidade}}</td>
            <td>{{$aparelho->camerafrontal}}</td>
            <td>{{$aparelho->cameratraseira}}</td>
            <td>{{$aparelho->slotsim->quantidade}}</td>
            <td>{{$aparelho->preco}}</td>

            <td class='d-flex flex-row'><a name="edit" id="" class="btn btn-primary" style='margin-right: 10px' href="#" role="button" data-toggle="modal" data-target="#edit{{$aparelho->id}}"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
                <a name="edit" id="" class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#excluir{{$aparelho->id}}"><i class="fas fa-trash " data-toggle="tooltip" data-placement="top" title="Excluir"></i></a></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</div>
<div class="d-flex justify-content-center">
  {{ $aparelhos->links() }}
</div>
@endif
<!-- Modal de Inclusão -->
<div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Aparelho Celular</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/aparelho/adicionar" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="modelo" class="col-form-label">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name='modelo' placeholder="Ex.: Samsung Galaxy S9" required>
            <label for="imagem" class="col-form-label">Imagem:</label>
            <input type="file" class="form-control" id="imagem" name='imagem' accept="image/*" required>
            <label for="marca" class="col-form-label">Marca:</label>
            <select class="form-control" name='marca' id='marca'>
              @foreach ($marcas as $marca)
              <option value='{{$marca->id}}'>{{$marca->nome}}</option>
              @endforeach
            </select>
            <label for="sistemaoperacional" class="col-form-label">Sistema Operacional:</label>
            <select class="form-control" name='sistemaoperacional' id='sistemaoperacional'>
              @foreach ($sistemasoperacionais as $sisop)
              <option value='{{$sisop->id}}'>{{$sisop->nome}} - {{$sisop->versao}}</option>
              @endforeach
            </select>
            <label for="processador" class="col-form-label">Processador:</label>
            <select class="form-control" name='processador' id='processador'>
              @foreach ($processadores as $processador)
              <option value='{{$processador->id}}'>{{$processador->marca}} - {{$processador->modelo}}</option>
              @endforeach
            </select>
            <label for="memoriainterna" class="col-form-label">Memória Interna:</label>
            <select class="form-control" name='memoriainterna' id='memoriainterna'>
              @foreach ($memoriasinterna as $memint)
              <option value='{{$memint->id}}'>{{$memint->quantidade}} Gb</option>
              @endforeach
            </select>
            <label for="memoriaram" class="col-form-label">Memória Ram:</label>
            <select class="form-control" name='memoriaram' id='memoriaram'>
              @foreach ($memoriasram as $memram)
              <option value='{{$memram->id}}'>{{$memram->quantidade}} Gb</option>
              @endforeach
            </select>
            <label for="slotsim" class="col-form-label">Slot Sim:</label>
            <select class="form-control" name='slotsim' id='slotsim'>
              @foreach ($slotssim as $slot)
              <option value='{{$slot->id}}'>{{$slot->quantidade}}</option>
              @endforeach
            </select>
            <label for="camerafrontal" class="col-form-label">Camera Frontal:</label>
            <input type="number" step='0.01' class="form-control" id="camerafrontal" name='camerafrontal' placeholder="Quantidade de MegaPixel">
            <label for="cameratraseira" class="col-form-label">Camera Traseira:</label>
            <input type="number" step='0.01' class="form-control" id="cameratraseira" name='cameratraseira' placeholder="Quantidade de MegaPixel">
            <label for="bateria" class="col-form-label">Bateria:</label>
            <input type="number" step='10' class="form-control" id="bateria" name='bateria' placeholder="Bateria em mAh">
            <label for="preco" class="col-form-label">Preço:</label>
            <input type="number" step='0.01' class="form-control" id="preco" name='preco' placeholder="Valor em R$">
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
@foreach($aparelhos as $aparelho)
<div class="modal fade" id="edit{{$aparelho->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Aparelho</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/aparelho/alterar/{{$aparelho->id}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="modelo" class="col-form-label">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name='modelo' value='{{$aparelho->modelo}}' required>
            <label for="imagem" class="col-form-label">Imagem:</label>
            <input type="file" class="form-control" id="imagem" name='imagem' accept="image/*">
            <label for="marca" class="col-form-label">Marca:</label>
            <select class="form-control" name='marca' id='marca'>
              <option value='{{$aparelho->marca->id}}' selected>{{$aparelho->marca->nome}} (Selecionado)</option>
              @foreach ($marcas as $marca)
              <option value='{{$marca->id}}'>{{$marca->nome}}</option>
              @endforeach
            </select>
            <label for="sistemaoperacional" class="col-form-label">Sistema Operacional:</label>
            <select class="form-control" name='sistemaoperacional' id='sistemaoperacional'>
              <option value='{{$aparelho->sistemaoperacional->id}}' selected>{{$aparelho->sistemaoperacional->nome}} - {{$aparelho->sistemaoperacional->versao}} (Selecionado)</option>
              @foreach ($sistemasoperacionais as $sisop)
              <option value='{{$sisop->id}}'>{{$sisop->nome}} - {{$sisop->versao}}</option>
              @endforeach
            </select>
            <label for="processador" class="col-form-label">Processador:</label>
            <select class="form-control" name='processador' id='processador'>
              <option value='{{$aparelho->processador->id}}'>{{$aparelho->processador->modelo}} (Selecionado)</option>
              @foreach ($processadores as $processador)
              <option value='{{$processador->id}}'>{{$processador->marca}} - {{$processador->modelo}}</option>
              @endforeach
            </select>
            <label for="memoriainterna" class="col-form-label">Memória Interna:</label>
            <select class="form-control" name='memoriainterna' id='memoriainterna'>
              <option value='{{$aparelho->memoriainterna->id}}'>{{$aparelho->memoriainterna->quantidade}} Gb (Selecionado)</option>
              @foreach ($memoriasinterna as $memint)
              <option value='{{$memint->id}}'>{{$memint->quantidade}} Gb</option>
              @endforeach
            </select>
            <label for="memoriaram" class="col-form-label">Memória Ram:</label>
            <select class="form-control" name='memoriaram' id='memoriaram'>
              <option value='{{$aparelho->memoriaram->id}}' selected>{{$aparelho->memoriaram->quantidade}} Gb (Selecionado)</option>
              @foreach ($memoriasram as $memram)
              <option value='{{$memram->id}}'>{{$memram->quantidade}} Gb</option>
              @endforeach
            </select>
            <label for="slotsim" class="col-form-label">Slot Sim:</label>
            <select class="form-control" name='slotsim' id='slotsim'>
              <option value='{{$aparelho->slotsim->id}}' selected>{{$aparelho->slotsim->quantidade}} (Selecionado)</option>
              @foreach ($slotssim as $slot)
              <option value='{{$slot->id}}'>{{$slot->quantidade}}</option>
              @endforeach
            </select>
            <label for="camerafrontal" class="col-form-label">Camera Frontal:</label>
            <input type="number" step='0.01' class="form-control" id="camerafrontal" name='camerafrontal' value='{{$aparelho->camerafrontal}}'>
            <label for="cameratraseira" class="col-form-label">Camera Traseira:</label>
            <input type="number" step='0.01' class="form-control" id="cameratraseira" name='cameratraseira' value='{{$aparelho->cameratraseira}}'>
            <label for="bateria" class="col-form-label">Bateria:</label>
            <input type="number" step='10' class="form-control" id="bateria" name='bateria' value='{{$aparelho->bateria}}'>
            <label for="preco" class="col-form-label">Preço:</label>
            <input type="number" step='0.01' class="form-control" id="preco" name='preco' value='{{$aparelho->preco}}'>
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
@foreach($aparelhos as $aparelho)
<div class="modal fade" id="excluir{{$aparelho->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
          <label for="recipient-name" class="col-form-label">Modelo: {{$aparelho->modelo}}</label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="/admin/aparelho/excluir/{{$aparelho->id}}" method="post">
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