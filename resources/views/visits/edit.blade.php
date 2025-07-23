@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Visitas
        </div>
        <div class="card-body">
             <form class="visits" method="post" action="{{ route('visits.update',$visit->id) }}">
                @csrf
                @method('PUT')
                @include('visits._form')
            </form>
        </div>
    </div>
</div>
@endsection
