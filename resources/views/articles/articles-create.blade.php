@extends('layout')

@section('content')
    @include('partials.validate_errors')
    <div class="container">
        <div class="h1 text-center mb-4 mt-5">
            Añadir Artículo
        </div>
        <form action="{{ route('articles.store') }}" method="POST">
            @include('articles.articles_form', ['btnText'=>'Crear'])
        </form>
    </div>
@endsection
