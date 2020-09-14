@extends('layout')

@section('content')

    @include('partials.validate_errors')
    <form action="{{ route('users.store') }}" method="POST">
        @include('users._form', ['btnText'=>'Crear'])
    </form>
@endsection
