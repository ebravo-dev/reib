@extends('layout')

@section('content')
    <ul>
        @if ($articles)
            @foreach ($articles as $article)
                <li>{{ $article['title'] }}</li>
            @endforeach
        @endisset
</ul>
@endsection
