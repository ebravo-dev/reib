@extends('layout')

@section('content')
    <div class="h1 text-center mb-5 mt-5">
        Crear Nuevo Aviso
    </div>
    @include('partials.validate_errors')
    <div class="container">
        <form action="{{ route('new-notice.store') }}" method="POST">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="title">Título</label>
                    <input required type="text" class="form-control" id="title" name="title" placeholder="Enter Here"
                        value="{{ old('title', $notice->title) }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="bodytext">Aviso</label>
                    <input required type="text" class="form-control" id="bodytext" name="bodytext" placeholder="Enter Here"
                        value="{{ old('bodytext', $notice->bodytext) }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">Crear</button>
        </form>
    </div>
@endsection
