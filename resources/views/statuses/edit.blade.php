@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Status
        </div>
        <div class="card-body">
             <form class="statuses" method="post" action="{{ route('statuses.update',$status->id) }}">
                @csrf
                @method('PUT')
                @include('statuses._form')
            </form>
        </div>
    </div>
</div>
@endsection
