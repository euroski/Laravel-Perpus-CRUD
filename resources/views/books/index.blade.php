<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>
    <div>
        <h1>Books</h1>
        <a href="{{ route('books.create') }}">Create New Book</a>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Penerbit</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>
                            <img src="{{ asset('images/' . $book->image) }}" alt="{{ $book->title }}" style="width: 50px; height: auto;">
                        </td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
