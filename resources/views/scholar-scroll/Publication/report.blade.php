<!DOCTYPE html>
<html>
<head>
    <title>Publication Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    {{-- Show publication data as report --}}
    <div class=container mt-5>
    <h1>Publication Report</h1>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Date</th>
                <th>Paper</th>
                <th>Publisher</th>
                <th>Pages</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publications as $publication)
            <tr>
                <td>{{ $publication->id }}</td> <!-- Add ID column -->
                <td>{{ $publication->publication_author }}</td>
                <td>{{ $publication->publication_title }}</td>
                <td>{{ $publication->publication_genre }}</td>
                <td>{{ $publication->publication_date }}</td>
                <td>{{ $publication->publication_paper }}</td>
                <td>{{ $publication->publication_publisher }}</td>
                <td>{{ $publication->publication_pages }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Back button to return to index page --}}
    <a href="{{route('publication.index')}}" class="btn btn-secondary btn-sm">Back</a>
    </div>
</body>
</html>