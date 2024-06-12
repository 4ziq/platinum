<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class=container mt-5>
    <h1>Publication</h1>

    <!-- Search form -->
    <form method="GET" action="{{route('publication.search')}}" class="mb-3">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Enter keyword for title..." value="{{request()->input('query')}}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <div>

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif <!-- Add endif to close the if directive -->
    </div>

    <div class="mb-3">
        <div>
            <a href="{{ route('publication.create') }}">Add New Publication</a>
        </div>

    <br>
   
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Publication ID</th>
                <th>Publication Author</th>
                <th>Publication Title</th>
                <th>Publication Genre</th>
                <th>Publication Date</th>
                <th>Publication Paper</th>
                <th>Publication Publisher</th>
                <th>Publication Pages</th>
                <th>Edit</th> 
                <th>Delete</th>
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
                <td>
                    <a href="{{ route('publication.edit', ['publication' => $publication->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('publication.destroy', ['publication' => $publication->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        {{-- <input type="submit" value="Delete"/> --}}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>  

    <a href="{{route('publication.show')}}">
        <button type="submit" class="btn btn-primary btn-sm">Report</button>
    </a>

</body>
</html>
