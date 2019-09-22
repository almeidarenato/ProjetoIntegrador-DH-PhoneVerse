@extends('admin.main')
@section('title','Marcas')
@section('content')
<div class="my-3 p-3 bg-white rounded box-shadow">
<h6 class="border-bottom border-gray pb-2 mb-0">
    Lista de Marcas
</h6>
<div class="media pt-3">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><a name="edit" id="" class="btn btn-primary" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar" ><i class="fas fa-edit"></i><a name="edit" id="" class="btn btn-danger" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fas fa-trash "></i></a></a></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
</div>
</div>
@endsection
