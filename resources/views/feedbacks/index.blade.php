@extends('layouts.template_admin')
@section('title', 'Gerenciar Feedbacks')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success float-right btn-sm" href="{{ route('feedbacks.create') }}" name="Novo"> Novo</a>
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
              <th>User ID</th>
              <th width="150px">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($feedbacks as $feedback)
              <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->description }}</td>
                <td>{{ $feedback->user_id }}</td>
                <td>
                  <a class="btn btn-warning btn-sm mr-1" href="{{ route('feedbacks.edit',$feedback->id) }}" name="Editar">Editar</a>
                  <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST">
                    
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
