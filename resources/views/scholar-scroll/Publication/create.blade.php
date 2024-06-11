<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Create Publication</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{route('publication.store')}}">
        @csrf
        {{-- @method('POST') --}}
        <div>
            <label>Publication Author:</label>
            <input type="text" name="publication_author" placeholder="Author of Publication">
        </div>
        <div>
            <br><label>Publication Title:</label>
            <input type="text" name="publication_title" placeholder="Title of Publication">
        </div>
        <div>
            <br><label>Publication Genre:</label>
            <input type="text" name="publication_genre" placeholder="Genre of Publication">
        </div>
        <div>
            <br><label>Publication Date:</label>
            <input type="date" name="publication_date" placeholder="Date of Publication">
        </div>
        <div>
            <br><label>Publication Paper:</label>
            <input type="file" name="publication_paper" placeholder="Documents of Publication">
        </div>
        <div>
            <br><label>Publication Publisher:</label>
            <input type="text" name="publication_publisher" placeholder="Publisher of Publication">
        </div>
        <div>
            <br><label>Publication Pages:</label>
            <input type="text" name="publication_pages" placeholder="Pages of Publication">
        </div>
        <div>
            <br><br><input type="submit" value="Save new publication"/>
        </div>
    </form>
</body>
</html>