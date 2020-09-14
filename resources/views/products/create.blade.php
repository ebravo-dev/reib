@extends('layout')

@section('content')

    @include('partials.validate_errors')
    <form action="{{ route('products.store') }}" method="POST">
        @include('products._form', ['btnText'=>'Crear'])
    </form>
@endsection
