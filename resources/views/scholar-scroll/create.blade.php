<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <form method="post" action="{{route('publication.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Publication Author:</label>
            <input type="pub_author" name="pub_author" placeholder="Author of Publication">
        </div>
        <div>
            <label>Publication Title:</label>
            <input type="pub_title" name="pub_title" placeholder="Title of Publication">
        </div>
        <div>
            <label>Publication Genre:</label>
            <input type="pub_genre" name="pub_genre" placeholder="Genre of Publication">
        </div>
        <div>
            <label>Publication Date:</label>
            <input type="pub_date" name="pub_date" placeholder="Date of Publication">
        </div>
        <div>
            <label>Publication Paper:</label>
            <input type="pub_paper" name="pub_paper" placeholder="Documents of Publication">
        </div>
        <div>
            <label>Publication Publisher:</label>
            <input type="pub_publisher" name="pub_publisher" placeholder="Publisher of Publication">
        </div>
        <div>
            <label>Publication Pages:</label>
            <input type="pub_pages" name="pub_pages" placeholder="Pages of Publication">
        </div>
        <div>
            <input type="submit" value="Save new publication"/>
        </div>
        

    </form>
</body>
</html>