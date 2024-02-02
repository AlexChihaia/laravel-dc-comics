<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC Comics</title>

    @vite('resources/js/app.js')
</head>

<body>

    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="container d-flex my-4 justify-content-center">
        <div class="d-flex card w-50 align-items-center">
            <h2 class="text-center">Price: ${{$comic->price}}</h2>
            <img class="w-50" src="{{$comic->thumb}}" alt="comic"> 
            <h3 class="text-center">Type: {{$comic->type}}</h3>
            <p class="px-5 text-center">{{$comic->description}}</p>


        </div>
    </div>

</body>

</html>