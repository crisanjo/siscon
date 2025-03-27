@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Perfil
        </div>
        <div class="card-body">
             <form class="profiles" method="post" action="{{ route('profiles.update',$profile->id) }}">
                @csrf
                @method('PUT')
                @include('profiles._form')
            </form>
        </div>
    </div>
</div>
@endsection
