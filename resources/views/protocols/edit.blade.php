@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Protocol
        </div>
        <div class="card-body">
             <form class="protocols" method="post" action="{{ route('protocols.update',$protocol->id) }}">
                @csrf
                @method('PUT')
                @include('protocols._form')
            </form>
        </div>
    </div>
</div>
@endsection
