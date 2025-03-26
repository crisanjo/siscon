@extends('layouts.template_admin_form')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Apartamento
        </div>
        <div class="card-body">
            <form class="apartments form" method="post" action="{{ route('apartments.update',$apartment->id) }}" id="form">
                @csrf
                @method('PUT')
                @include('apartments._form')
            </form>
        </div>
    </div>
</div>
@endsection
