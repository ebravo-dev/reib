@extends('layout')

@section('content')
    @include('partials.navbar')
    <p class="text-center font-weight-light h1 mt-5">Edición {{ $currentMonth }} {{ $year }}</p>
    <p class="text-center font-weight-light text-secondary h4">{{ $volume }} {{ $number }}</p>
    <div class="text-center mt-4 mb-5">

        <a target="_blank" rel="noopener noreferrer" href="{{ $portada }}" type="button"
            class="btn btn-outline-dark boton-descargar-portada pr-3 pl-3">Portada, hoja
            legal e
            índice</a>
    </div>

    <div class="container mt-5 pt-3 ">
        @php
        $current_category = "";
        $current_color = -1;
        @endphp
        @foreach ($articles as $article)

            @if ($current_category != $article['category'])
                @php
                $current_category = $article['category'];
                $current_color++;
                @endphp
                <div class="mb-3">
                    <div class="mr-5 ml-5 pl-4 pr-4 category-{{ $current_color }} shadow-sm">
                        <p class="h5 ml-1 mr-1  pt-3 pb-3 text-light text-center text-uppercase">{{ $article['category'] }}
                        </p>
                    </div>
                </div>
            @endif




            <div dir="{{ $article['linkpdf'] }}"
                class="url-article-provider shadow item-article item-article-{{ $current_color }} article-lg pr-5 pl-5 mr-5 ml-5 mb-4 "
                style="cursor:pointer;">
                <p class="title h4">
                    <strong>{{ $article['title'] }}</strong>
                </p>
                <p class="font-weight-light">{{ $article['authors'] }}</p>

                <div class="mb-4">
                    <p class="text-justify">
                        {{ implode(' ', array_slice(explode(' ', $article['esabstract']), 0, 70)) }}...
                    </p>
                </div>
                <div class="row pl-2 mb-4">

                    @foreach (explode(', ', $article['eskeywords']) as $item)

                        <div class="chip chip-{{ $current_color }} col-md-auto ml-1 mr-1 mb-2 text-capitalize">
                            {{ $item }}
                        </div>
                    @endforeach


                </div>
                <footer class="font-weight-light">
                    <div class="row ">
                        <div class="col-md-11 mt-2">
                            {{ $article['institute'] }}
                        </div>
                        <div class="col-md-1 text-right font-weight-bold mt-2">
                            {{ $article['indexnumber'] }}
                        </div>
                    </div>

                </footer>
            </div>
        @endforeach
    </div>
    <div class="mt-5">

        @include('partials.footer')
    </div>
@endsection
