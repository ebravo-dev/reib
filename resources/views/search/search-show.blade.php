@extends('layout')

@section('content')
    @include('partials.navbar')
    <div class="space-with-navbar"></div>
    <div class="text-center mt-5 pt-5 pb-3">
        <span style="font-family:'Raleway'; font-size: 32px;
                                                                font-weight: bold;
                                                                text-transform: uppercase;
                                                                color: #124265;" class="text-center">Resultados</span>
    </div>
    <div class=" mb-4 text-center">
        <p style="font-family:'Open Sans';" class="h5 font-weight-light">Accede a más de cien
            publicaciones cientificas disponibles</p>
    </div>
    <div class="container mt-3 pt-3 w-50 mb-5">
        @foreach ($articles as $article)

            <div dir="{{ $article['linkpdf'] }}"
                class=" url-article-provider shadow item-article item-article-0 article-lg pr-5 pl-5 mr-5 ml-5 mb-4 "
                style="cursor:pointer;">
                <p id="body-card" class="title h4">
                    <strong>{!! $article['title'] !!}</strong>
                </p>
                <p id="body-card" class="font-weight-light">{!! $article['authors'] !!}</p>

                <div class="mb-4">
                    <p id="body-card" class="text-justify">
                        {!! implode(' ', array_slice(explode(' ', $article['esabstract']), 0, 70)) !!}...
                    </p>
                </div>
                <div class="row pl-2 mb-4">

                    @foreach (explode(', ', $article['eskeywords']) as $item)

                        <div class="chip chip-0 col-md-auto ml-1 mr-1 mb-2 text-capitalize">
                            {{ $item }}
                        </div>
                    @endforeach


                </div>
                <footer class="font-weight-light">
                    <div class="row ">
                        <div id="body-card" class="col-md-8 mt-2">
                            {!! $article['institute'] !!}
                        </div>
                        <div class="col-md-4 text-right font-weight-bold mt-2">
                            {{ toEsp($article['month']) }}
                            {{ $article['year'] }}

                        </div>
                    </div>

                </footer>
            </div>
        @endforeach
    </div>
@endsection
