@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Type
        </div>
        <div class="card-body">
             <form class="types" method="post" action="{{ route('types.update',$type->id) }}">
                @csrf
                @method('PUT')
                @include('types._form')
            </form>
        </div>
    </div>
</div>
@endsection
