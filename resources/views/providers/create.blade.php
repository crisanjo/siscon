@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Provedores
        </div>
        <div class="card-body">
            <form class="department" method="post" action="{{ route('providers.store') }}" >
                @csrf
                @include('providers._form')
            </form>
        </div>
    </div>
</div>
@endsection
