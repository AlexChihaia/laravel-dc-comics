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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 class="text-center">Create your comic</h2>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title'), $comic->title }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{ old('description'), $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" value="{{ old('thumb'), $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price'), $comic->price }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{ old('series'), $comic->series }}">
            </div>
            <div class="mb-3">
                <label class="active">Publish date</label>
                <input type="date" name="sale_date" value="{{ old('sale_date'), $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{ old('type'), $comic->type }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists" value="{{ old('artists'), $comic->artists }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers"
                    value="{{ old('writers'), $comic->writers }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit your comic</button>
        </form>
    </div>
    </div>

</body>

</html>
