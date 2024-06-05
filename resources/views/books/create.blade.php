<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
</head>
<body>
    <h1>Create Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="image">Image:</label>
        <input type="text" name="image" id="image">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit">
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price">
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock">
        <button type="submit">Create</button>
    </form>
</body>
</html>
