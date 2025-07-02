@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Protocolos
        </div>
        <div class="card-body">
            <form class="protocol" method="post" action="{{ route('protocols.store') }}" >
                @csrf
                @include('protocols._form')
            </form>
        </div>
    </div>
</div>
@endsection
