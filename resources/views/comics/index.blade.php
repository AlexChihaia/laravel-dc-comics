<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC Comics</title>

    @vite('resources/js/app.js')
</head>

<body>

    <h1 class="text-center">DC Comic Shop</h1>
    <ul>
        @foreach ($comics as $comic)
        <li>
            <a href="{{route('comics.show', $comic)}}">{{$comic->title}}</a>
        </li>
        @endforeach
    </ul>

</body>

</html>