@extends('layout')

@section('content')
    @include('partials.navbar')
    <div class="space-with-navbar"></div>

    <div class="text-center mt-5 pt-5 pb-3">
        <span style="font-family:'Raleway'; font-size: 32px;
                                                                        font-weight: bold;
                                                                        text-transform: uppercase;
                                                                        color: #124265;" class="text-center"><a
                style="color:#124265;" target="_blank" rel="noopener noreferrer" href="{{ $portada }}" type="button"
                class=" pr-3 pl-3">Ver
                portada</a></span>
    </div>

    {{-- <p class="text-center font-weight-light h1 mt-5 pt-5 pb-2"><a style="color:#000;"
            target="_blank" rel="noopener noreferrer" href="{{ $portada }}" type="button" class=" pr-3 pl-3">Ver portada</a>
    </p> --}}
    <div class=" mb-3 text-center">
        <p style="font-family:'Open Sans';" class="h5 font-weight-light">Estas viendo la publicación de {{ $currentMonth }}
            {{ $year }}
            {{ $volume }}
            {{ $number }}

        </p>
    </div>

    <div class="container mt-5  w-50">
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
                <div class="">
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

        {{-- @include('partials.footer') --}}
    </div>
@endsection
