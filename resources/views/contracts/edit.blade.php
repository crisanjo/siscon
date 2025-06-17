@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Contratos
        </div>
        <div class="card-body">
             <form class="contracts" method="post" action="{{ route('contracts.update',$contract->id) }}">
                @csrf
                @method('PUT')
                @include('contracts._form')
            </form>
        </div>
    </div>
</div>
@endsection
