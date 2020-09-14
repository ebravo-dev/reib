@csrf
<input type="text" name="title" value="{{ old('title', $article->title) }}">
<input type="text" name="authors" value="{{ old('authors', $article->authors) }}">
<input type="text" name="institute" value="{{ old('institute', $article->institute) }}">
<input type="text" name="edition" value="{{ old('edition', $article->edition) }}">
<input type="text" name="volume" value="{{ old('volume', $article->volume) }}">
<input type="text" name="number" value="{{ old('number', $article->number) }}">
<input type="text" name="eskeywords" value="{{ old('eskeywords', $article->eskeywords) }}">
<input type="text" name="enkeywords" value="{{ old('enkeywords', $article->enkeywords) }}">
<input type="text" name="esabstract" value="{{ old('esabstract', $article->esabstract) }}">
<input type="text" name="enabstract" value="{{ old('enabstract', $article->enabstract) }}">

<input type="submit" value="{{ $btnText }}">
