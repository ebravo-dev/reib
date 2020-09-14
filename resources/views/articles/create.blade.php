@extends('layout')

@section('content')

    @include('partials.validate_errors')
    <form action="{{ route('articles.store') }}" method="POST">
        @include('articles.articles_form', ['btnText'=>'Crear'])
    </form>
@endsection
