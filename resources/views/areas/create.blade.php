@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Areas
        </div>
        <div class="card-body">
            <form class="area" method="post" action="{{ route('areas.store') }}" >
                @csrf
                @include('areas._form')
            </form>
        </div>
    </div>
</div>
@endsection
