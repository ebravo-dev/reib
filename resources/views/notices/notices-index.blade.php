@extends('layout')

@section('content')
    @include('partials.navbar')



    <div class="space-with-navbar"></div>
    <div class="text-center mt-5 pt-5 pb-3">
        <span style="font-family:'Raleway'; font-size: 32px; font-weight: bold; text-transform: uppercase; color: #124265;"
            class="text-center">Avisos</span>
    </div>
    <div class=" mb-4 text-center">
        <p style="font-family:'Open Sans';" class="h5 font-weight-light">Publicamos artículos relacionados con la
            investigación en cualquier área de la ciencia</p>
    </div>
    <div class="">
        <div class="container bg-white  mb-5 mt-5">
            <div class="row justify-content-md-center">
                @foreach ($notices as $notice)


                    <div data-toggle="popover" title="Aviso Completo" data-placement="top"
                        data-content="{{ $notice->bodytext }}" class="col-4 mb-5 " style="cursor:pointer">
                        <div class="notice-box shadow pr-1 pl-1 item-article-notice">
                            <div class="pr-3 pl-3 pt-4 ">
                                <div class="p-3">

                                    <p class="mb-3"
                                        style="font-family: 'Oswald'; color:#6385c9; font-weight:500;text-transform: uppercase;">
                                        {{ toShortMonthEsp($notice->created_at->format('m')) }}
                                        {{ $notice->created_at->format('d') }},
                                        {{ $notice->created_at->format('Y') }}
                                    </p>
                                    <p id="noticecardTitle" class="h4 text-dark mb-3 noticetitle"
                                        style="font-weight: 500; font-family:'Poppins';">
                                        {{ $notice->title }}
                                    </p>

                                    <p id="noticecardBody" class="mb-3 noticetext text-muted ">
                                        {{ $notice->bodytext }}
                                        <br>&nbsp;
                                    </p>
                                </div>
                            </div>
                            <div class="text-right mb-3 ml-3 pl-3 pr-3 mr-3 text-muted ">
                                <i class="ri-timer-2-line" style="vertical-align: middle;"></i>
                                <span
                                    style="vertical-align: middle;">{{ ucfirst($notice->created_at->diffForHumans()) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
