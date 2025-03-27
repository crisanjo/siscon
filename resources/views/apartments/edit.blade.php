@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Apartamentos
        </div>
        <div class="card-body">
             <form class="apartments" method="post" action="{{ route('apartments.update',$apartment->id) }}">
                @csrf
                @method('PUT')
                @include('apartments._form')
            </form>
        </div>
    </div>
</div>
@endsection
