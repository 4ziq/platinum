<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Publication</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif <!-- Add endif to close the if directive -->
    </div>
    <div>
        <div>
            <a href="{{ route('publication.create') }}">Create Publication</a>
        </div>
        <table>
            <tr>
                <th>Publication ID</th>
                <th>Publication Author</th>
                <th>Publication Title</th>
                <th>Publication Genre</th>
                <th>Publication Date</th>
                <th>Publication Paper</th>
                <th>Publication Publisher</th>
                <th>Publication Pages</th>
                <th>Edit</th> <!-- Add header for Edit -->
                <th>Delete</th>
            </tr>
            @foreach($publication as $publication)
            <tr>
                <td>{{ $publication->id }}</td> <!-- Add ID column -->
                <td>{{ $publication->publication_author }}</td>
                <td>{{ $publication->publication_title }}</td>
                <td>{{ $publication->publication_genre }}</td>
                <td>{{ $publication->publication_date }}</td>
                <td>{{ $publication->publication_paper }}</td>
                <td>{{ $publication->publication_publisher }}</td>
                <td>{{ $publication->publication_pages }}</td>
                <td>
                    <a href="{{ route('publication.edit', ['publication' => $publication->id]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('publication.destroy', ['publication' => $publication->id]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
