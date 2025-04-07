@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            Feedbacks
        </div>
        <div class="card-body">
             <form class="feedbacks" method="post" action="{{ route('feedbacks.update',$feedback->id) }}">
                @csrf
                @method('PUT')
                @include('feedbacks._form')
            </form>
        </div>
    </div>
</div>
@endsection
