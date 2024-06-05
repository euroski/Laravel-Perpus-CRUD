<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="image">Image:</label>
        <input type="text" name="image" id="i   mage" value="{{ $book->image }}">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}">
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" value="{{ $book->penerbit }}">
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $book->description }}</textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $book->price }}">
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $book->stock }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
