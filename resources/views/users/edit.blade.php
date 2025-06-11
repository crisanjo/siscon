@extends('layouts.template_admin')
@section('content')

<div class="container">
    <div class="card col-sm-12 justify-content-center">
        @include('partials.validation-alert')
        @include('partials.validation-error')
        <div class="card-header">
            User
        </div>
        <div class="card-body">
             <form class="users" method="post" action="{{ route('users.update',$user->id) }}">
                @csrf
                @method('PUT')
                @include('users._form')
            </form>
        </div>
    </div>
</div>
@endsection
