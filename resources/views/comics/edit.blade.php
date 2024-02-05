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
        <h2 class="text-center">Create your comic</h2>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label  class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label class="active">Publish date</label>
                <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists" value="{{ $comic->artists }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers" value="{{ $comic->writers }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit your comic</button>
        </form>
        </div>
    </div>

</body>

</html>