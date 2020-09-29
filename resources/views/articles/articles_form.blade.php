@csrf

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Here"
            value="{{ old('title', $article->title) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="authors">Authors</label>
        <input type="text" class="form-control" id="authors" name="authors" placeholder="Enter Here"
            value="{{ old('authors', $article->authors) }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="institute">Institute</label>
        <input type="text" class="form-control" id="institute" name="institute" placeholder="Enter Here"
            value="{{ old('institute', $article->institute) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="month">Edition</label>
        <select class="form-control" id="edition" name="edition">
            @foreach ($editions as $key => $edition)
                @foreach ($edition as $month)
                    <option>{{ $key }} - {{ $month }}</option>

                @endforeach
            @endforeach
        </select>
        {{-- <input type="text" class="form-control" id="month" name="month"
            placeholder="Enter Here" value="{{ old('month', $article->month) }}"> --}}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="volume">Volume</label>
        <input type="text" class="form-control" id="volume" name="volume" placeholder="Enter Here"
            value="{{ old('volume', $article->volume) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="number">Number</label>
        <input type="text" class="form-control" id="number" name="number" placeholder="Enter Here"
            value="{{ old('number', $article->number) }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="eskeywords">Eskeywords</label>
        <input type="text" class="form-control" id="eskeywords" name="eskeywords" placeholder="Enter Here"
            value="{{ old('eskeywords', $article->eskeywords) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="enkeywords">Enkeywords</label>
        <input type="text" class="form-control" id="enkeywords" name="enkeywords" placeholder="Enter Here"
            value="{{ old('enkeywords', $article->enkeywords) }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="esabstract">Esabstract</label>
        <input type="text" class="form-control" id="esabstract" name="esabstract" placeholder="Enter Here"
            value="{{ old('esabstract', $article->esabstract) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="enabstract">Enabstract</label>
        <input type="text" class="form-control" id="enabstract" name="enabstract" placeholder="Enter Here"
            value="{{ old('enabstract', $article->enabstract) }}">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" name="category" placeholder="Enter Here"
            value="{{ old('category', $article->category) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="indexnumber">Indexnumber</label>
        <input type="number" class="form-control" id="indexnumber" name="indexnumber" placeholder="Enter Here"
            value="{{ old('indexnumber', $article->indexnumber) }}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="linkpdf">Linkpdf</label>
        <input type="text" class="form-control" id="linkpdf" name="linkpdf" placeholder="Enter Here"
            value="{{ old('linkpdf', $article->indexnumber) }}">
    </div>
    <div class="form-group col-md-6">
        <label for="linkheader">Linkheader</label>
        <input type="text" class="form-control" id="linkheader" name="linkheader" placeholder="Enter Here"
            value="{{ old('linkheader', $article->indexnumber) }}">
    </div>
</div>

{{-- <input type="text" name="title" value="{{ old('title', $article->title) }}">
<input type="text" name="authors" value="{{ old('authors', $article->authors) }}">
<input type="text" name="institute" value="{{ old('institute', $article->institute) }}">
<input type="text" name="month" value="{{ old('month', $article->month) }}">
<input type="text" name="year" value="{{ old('year', $article->year) }}">
<input type="text" name="volume" value="{{ old('volume', $article->volume) }}">
<input type="text" name="number" value="{{ old('number', $article->number) }}">
<input type="text" name="eskeywords" value="{{ old('eskeywords', $article->eskeywords) }}">
<input type="text" name="enkeywords" value="{{ old('enkeywords', $article->enkeywords) }}">
<input type="text" name="esabstract" value="{{ old('esabstract', $article->esabstract) }}">
<input type="text" name="enabstract" value="{{ old('enabstract', $article->enabstract) }}">
<input type="text" name="category" value="{{ old('category', $article->category) }}">
<input type="text" name="indexnumber" value="{{ old('indexnumber', $article->indexnumber) }}">
<input type="text" name="linkpdf" value="{{ old('linkpdf', $article->linkpdf) }}">
<input type="text" name="linkheader" value="{{ old('linkheader', $article->linkheader) }}">
--}}

<button type="submit" class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
{{-- <input type="submit" value="{{ $btnText }}"> --}}
