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

    <h2 class="text-center">{{ $comic->title }}</h2>
    <div class="container d-flex my-4 justify-content-center">
        <div class="d-flex card w-50 align-items-center py-3">
            <h3 class="text-center">Price: ${{ $comic->price }}</h3>
            <img class="w-50" src="{{ $comic->thumb }}" alt="comic">
            <h3 class="text-center">Type: {{ $comic->type }}</h3>
            <p class="px-5 text-center">{{ $comic->description }}</p>
            <div>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-warning mx-2">Edit</a>
            </div>
        </div>
    </div>

</body>

</html>
