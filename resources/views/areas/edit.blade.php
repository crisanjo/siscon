@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Area
        </div>
        <div class="card-body">
             <form class="areas" method="post" action="{{ route('areas.update',$area->id) }}">
                @csrf
                @method('PUT')
                @include('areas._form')
            </form>
        </div>
    </div>
</div>
@endsection
