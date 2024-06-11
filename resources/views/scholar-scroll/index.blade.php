<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scales=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Publication</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    </div>
    <div>
        <div>
            <a href="{{route('publication.create')}}">Create Publication</a>
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
                <th>Delete</th>
            </tr>
            @foreach($publication as $publication)
            <tr>
                <td>{{$product->publication_author}}</td>
                <td>{{$product->publication_title}}</td>
                <td>{{$product->publication_genre}}</td>
                <td>{{$product->publication_date}}</td>
                <td>{{$product->publication_paper}}</td>
                <td>{{$product->publication_publisher}}</td>
                <td>{{$product->publication_pages}}</td>
                <td>
                    <a href="{{route('publication.edit', ['publication' => $publication])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('publication.destroy', ['publication' => $publication])}}">
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


{{-- <x-layout>
    <p>text</p>
</x-layout> --}}


