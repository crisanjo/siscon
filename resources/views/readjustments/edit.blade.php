@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Reajustes
        </div>
        <div class="card-body">
             <form class="readjustments" method="post" action="{{ route('readjustments.update',$readjustment->id) }}">
                @csrf
                @method('PUT')
                @include('readjustments._form')
            </form>
        </div>
    </div>
</div>
@endsection
