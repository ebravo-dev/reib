@csrf
<input value="edr" type="text" name="name" value="{{ old('name', $user->name) }}">
<input value="qwer" type="text" name="password" value="{{ old('password', $user->password) }}">
<input value="algo@algo.com" type="text" name="email" value="{{ old('email', $user->email) }}">
{{-- <input value="1" type="text" name="institute"
    value="{{ old('institute', $article->institute) }}">
<input value="1" type="text" name="edition" value="{{ old('edition', $article->edition) }}">
<input value="1" type="text" name="volume" value="{{ old('volume', $article->volume) }}">
<input value="1" type="text" name="number" value="{{ old('number', $article->number) }}">
<input value="1" type="text" name="eskeywords" value="{{ old('eskeywords', $article->eskeywords) }}">
<input value="1" type="text" name="enkeywords" value="{{ old('enkeywords', $article->enkeywords) }}">
<input value="1" type="text" name="esabstract" value="{{ old('esabstract', $article->esabstract) }}">
<input value="1" type="text" name="enabstract" value="{{ old('enabstract', $article->enabstract) }}">
--}}
<input type="submit" value="{{ $btnText }}">
