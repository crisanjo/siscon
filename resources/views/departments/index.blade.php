@extends('layouts.template_admin')
@section('title', 'Gerenciar Departamentos')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <button class="btn btn-success float-right btn-sm link_jspanel_form" data-url="{{ route('departments.create') }}" name="Nova Nacionalidade"> Novo Departamento</button>
        </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        @include('partials.validation-alert')
        <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="50px">Id</th>
              <th>Nome</th>
              <th width="150px">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($departments as $department)
              <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>
                  <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
                    <button class="btn btn-warning btn-sm link_jspanel_form mr-1" data-url="{{ route('departments.edit',$department->id) }}" name="Editar Departamento">Editar</button>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('Caso esta ação seja confirmada, não poderá ser desfeita. Deseja continuar?') }}')">Deletar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
