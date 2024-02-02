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
                <span class="mx-2"><a href="{{ route('comics.index') }}" class="">Our comics</a></span>
                <span class="mx-2"><a href="http://">Create your own comic</a></span>
                <span class="mx-2"><a href="http://">About comics</a></span>
            </div>
        </div>
    </div>

</body>

</html>