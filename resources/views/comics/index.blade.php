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
    <ul class="container d-flex flex-column align-items-center">
        @foreach ($comics as $comic)
        <li class="card py-3 my-2 w-50 d-flex flex-row justify-content-between">
            <div class="mx-2"><a href="{{route('comics.show', $comic)}}">{{$comic->title}}</a></div>
            <div class="d-flex">
                <a href="{{ route('comics.edit', $comic->id) }}"
                    class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-sm btn-danger mx-2" type="submit"
                            value="Delete">
                    </form>
            </div>
            
        </li>
        @endforeach
    </ul>

</body>

</html>