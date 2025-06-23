@extends('layouts.template_admin')
@section('title', 'Gerenciar Contratos')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success float-right btn-sm" href="{{ route('contracts.create') }}" name="Novo"> Novo</a>
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
              <th>Valor</th>
              <th>Data de início</th>
              <th>Data de término</th>
              <th>Assinatura digital</th>
              <th>Provedor</th>
              <th width="150px">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contracts as $contract)
              <tr>
                <td>{{ $contract->id }}</td>
                <td>{{ $contract->value }}</td>
                <td>{{ \carbon\carbon::parse($contract->start_date)->format('d/m/y') }}</td>
                <td>{{ \carbon\carbon::parse($contract->end_date)->format('d/m/y') }}</td>
                <td>{{ $contract->digital_signature}}</td>
                <td>{{ $contract->providers_id}}</td>
                <td>
                  <a class="btn btn-warning btn-sm mr-1" href="{{ route('contracts.edit',$contract->id) }}" name="Editar">Editar</a>
                  <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST">
                    
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
