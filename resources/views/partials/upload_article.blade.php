@extends('layout')
@section('content')
    <style>
        .fill-height {
            position: relative;
            /* background: #2487ce; */
            min-height: 100%;
            min-width: 100%;
            height: 100vh;

        }

        #hello {
            position: absolute;
            top: 50%;
            left: 50%;
            padding-bottom: 70px;
            transform: translate(-50%, -50%);
            font-family: 'Open Sans' !important;
            /* color: ; */
            /*white text*/
            font-weight: bold;
        }

        .dotted {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='2' ry='2' stroke='%23EAEAEAFF' stroke-width='3' stroke-dasharray='13%2c 14%2c 16%2c 10' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
            border-radius: 2px;

        }

    </style>
    <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">

    <div class="container fill-height">

        <div id="hello" class=" dotted text-center">
            <div class="icon-upload">
                <span class="lnr lnr-upload"></span>
            </div>
            <p class="h4" style="text-align:center;">Seleccionar documento o arrastre aquí</p>
            {{-- <p class="h4" style="text-align:center;">Seleccionar documento</p>
            --}}
        </div>
    </div>
@endsection
