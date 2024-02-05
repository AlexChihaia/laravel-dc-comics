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
    <div class="container my-4">
        <h2 class="text-center">Create your comic</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" required>
            </div>
            <div class="mb-3">
                <label class="active">Publish date</label>
                <input type="date" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control " name="type" required>

            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <input type="text" class="form-control" name="artists">
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <input type="text" class="form-control" name="writers">
            </div>

            <button type="submit" class="btn btn-primary">Submit your comic</button>
        </form>
    </div>
    </div>

</body>

</html>
