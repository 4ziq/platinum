<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }

        th,td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th{
            background: #f2f2f2;
        }

        tr:hover{
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Edit Publication</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{route('publication.update', $publication->id)}}">
        @csrf
        @method('PUT')
        
        <div>
            <label>Publication Author:</label>
            <input type="text" name="publication_author" placeholder="Author of Publication" value="{{$publication->publication_author}}" />
        </div>
        <div>
            <label>Publication Title:</label>
            <input type="text" name="publication_title" placeholder="Title of Publication" value="{{$publication->publication_title}}">
        </div>
        <div>
            <label>Publication Genre:</label>
            <input type="text" name="publication_genre" placeholder="Genre of Publication" value="{{$publication->publication_genre}}">
        </div>
        <div>
            <label>Publication Date:</label>
            <input type="text" name="publication_date" placeholder="Date of Publication" value="{{$publication->publication_date}}">
        </div>
        <div>
            <label>Publication Paper:</label>
            <input type="text" name="publication_paper" placeholder="Documents of Publication" value="{{$publication->publication_paper}}">
        </div>
        <div>
            <label>Publication Publisher:</label>
            <input type="text" name="publication_publisher" placeholder="Publisher of Publication" value="{{$publication->publication_publisher}}">
        </div>
        <div>
            <label>Publication Pages:</label>
            <input type="text" name="publication_pages" placeholder="Pages of Publication" value="{{$publication->publication_pages}}">
        </div>
        <div>
            <input type="submit" value="Update"/>
        </div>
        

    </form>
</body>
</html>