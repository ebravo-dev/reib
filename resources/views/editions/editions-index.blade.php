@extends('layout')

@section('content')
    <div class="h1 text-center mb-5">
        Ingresar Nueva Edición
    </div>
    @include('partials.validate_errors')
    <div class="container">
        <form action="{{ route('editions.store') }}" method="POST">

            @include('editions.editions_form', ['btnText'=>'Agregar Edición'])
        </form>
    </div>
@endsection
