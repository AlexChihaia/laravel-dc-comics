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
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" required>
            </div>
            <div class="mb-3">
                <label class="active">Publish date</label>
                <input type="date" class="@error('sale_date') is-invalid @enderror" name="sale_date">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" required>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

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
