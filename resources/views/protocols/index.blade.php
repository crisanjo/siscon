@extends('layouts.template_admin')
@section('title', 'Gerenciar Protocolos')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success float-right btn-sm" href="{{ route('protocols.create') }}" name="Novo"> Novo</a>
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
              <th>Descrição</th>
              <th>Solução</th>
              <th>Abertura</th>
              <th>Valor</th>
              <th>Pago</th>
              <th>Usuário</th>
              <th>Área</th>
              <th>Status</th>
              <th>Tipo</th>
              <th>prioridade</th>
              <th width="150px">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($protocols as $protocol)
              <tr>
                <td>{{ $protocol->id }}</td>
                <td>{{ $protocol->description }}</td>
                <td>{{ $protocol->solution }}</td>
                <td>{{ \carbon\carbon::parse($protocol->opening_date)->format('d/m/y') }}</td>
                <td>{{ $protocol->value }}</td>
                <td>{{ $protocol->is_paid() }}</td>
                <td>{{ $protocol->user_id }}</td>
                <td>{{ $protocol->area->description }}</td>
                <td>{{ $protocol->status->description }}</td>
                <td>{{ $protocol->type_id }}</td>
                <td>{{ $protocol->priority }}</td>
                <td>
                  <a class="btn btn-warning btn-sm mr-1" href="{{ route('protocols.edit',$protocol->id) }}" name="Editar">Editar</a>
                  <form action="{{ route('protocols.destroy', $protocol->id) }}" method="POST">
                    
                    @csrf
                    @method('DELETE')
                    <button protocol="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('Caso esta ação seja confirmada, não poderá ser desfeita. Deseja continuar?') }}')">Deletar</button>
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
