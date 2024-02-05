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
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center text-center ">
                <span class="mx-2 badge text-bg-primary ">
                    <a href="{{ route('comics.index') }}" class="text-white">Our comics</a>
                </span>
                <span class="mx-2 badge text-bg-primary">
                    <a href="{{ route('comics.create') }}" class="text-white">Create your own comic</a>
                </span>
                <span class="mx-2 badge text-bg-primary">
                    <a href="http://" class="text-white">About comics</a>
                </span>
            </div>
        </div>
    </div>
    <ul class="container d-flex flex-column align-items-center">
        @foreach ($comics as $comic)
            <li class="card py-3 my-2 w-50 d-flex flex-row justify-content-between">
                <div class="mx-2">
                    <p>{{ $comic->title }}</p>
                </div>
                <div class="d-flex">
                    <div>
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-sm btn-success mx-2 ">View
                            Detail</a>
                    </div>
                    <div>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-warning mx-2">Edit</a>
                    </div>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-sm btn-danger mx-2" type="submit" value="Delete">
                    </form>
                </div>

            </li>
        @endforeach
    </ul>

</body>

</html>
