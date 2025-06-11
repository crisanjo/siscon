@extends('layouts.template_admin')
@section('title', 'Gerenciar Provedores')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success float-right btn-sm" href="{{ route('providers.create') }}" name="Novo"> Novo</a>
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
              <th>Telefone</th>
              <th>Email</th>
              <th width="150px">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($providers as $provider)
              <tr>
                <td>{{ $provider->id }}</td>
                <td>{{ $provider->name }}</td>
                <td>{{ $provider->phone }}</td>
                <td>{{ $provider->email}}</td>
                <td>
                  <a class="btn btn-warning btn-sm mr-1" href="{{ route('providers.edit',$provider->id) }}" name="Editar">Editar</a>
                  <form action="{{ route('providers.destroy', $provider->id) }}" method="POST">
                    
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
