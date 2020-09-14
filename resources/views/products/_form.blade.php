@csrf
<input type="text" name="title" value="{{ old('title', $product->name) }}">
<input type="text" name="price" value="{{ old('price', $product->price) }}">
<input type="submit" value="{{ $btnText }}">
