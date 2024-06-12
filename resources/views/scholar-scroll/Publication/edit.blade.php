<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit publication data</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
    <h1>Edit Publication Data</h1>
    <div>
        @if($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
        @endif
    </div>

    <form method="POST" action="{{route('publication.update', $publication->id)}}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="publication_author">Publication Author:</label>
            <input type="text" class="form-control" id="publication_author" name="publication_author" placeholder="Author of Publication" value="{{$publication->publication_author}}" />
        </div>
        <div class="form-group">
            <label for="publication_title">Publication Title:</label>
            <input type="text" class="form-control" id="publication_title" name="publication_title" placeholder="Title of Publication" value="{{$publication->publication_title}}">
        </div>
        <div class="form-group">
            <label for="publication_genre">Publication Genre:</label>
            <input type="text" class="form-control" id="publication_genre" name="publication_genre" placeholder="Genre of Publication" value="{{$publication->publication_genre}}">
        </div>
        <div class="form-group">
            <label for="publication_date">Publication Date:</label>
            <input type="text" class="form-control" id="publication_date" name="publication_date" placeholder="Date of Publication" value="{{$publication->publication_date}}">
        </div>
        <div class="form-group">
            <label for="publication_paper">Publication Paper:</label>
            <input type="text" class="form-control" id="publication_paper" name="publication_paper" placeholder="Documents of Publication" value="{{$publication->publication_paper}}">
        </div>
        <div class="form-group">
            <label for="publication_publisher">Publication Publisher:</label>
            <input type="text" class="form-control" id="publication_publisher" name="publication_publisher" placeholder="Publisher of Publication" value="{{$publication->publication_publisher}}">
        </div>
        <div class="form-group">
            <label for="publication_pages">Publication Pages:</label>
            <input type="text" class="form-control" id="publication_pages" name="publication_pages" placeholder="Pages of Publication" value="{{$publication->publication_pages}}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        

    </form>
</body>
</html>