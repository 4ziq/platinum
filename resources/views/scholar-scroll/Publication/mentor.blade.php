<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mentor Index Page</title>

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

    <!-- Search function-->
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
        @endif 
    </div>

{{-- Display publication data --}}
    <div class="mb-3">
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
                </td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>  

    {{-- To show report --}}
    <a href="{{route('publication.show')}}">
        <button type="submit" class="btn btn-primary btn-sm">Report</button>
    </a>

    {{-- To return back to index page --}}
    <a href="{{route('publication.index')}}">
        <button type="submit" class="btn btn-secondary btn-sm">Back</button>
    </a>

</body>
</html>
