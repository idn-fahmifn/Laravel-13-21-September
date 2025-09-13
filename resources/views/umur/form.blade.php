<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Umur</h1>
    <form action="{{route('prosses')}}" method="post">
        @csrf
        <div class="">
            <label for=""> Masukan nama kamu</label>
            <input type="text" name="name">
        </div>
        <div class="">
            <label for=""> Umur</label>
            <input type="number" name="umur">
        </div>
        <div class="">
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>
</html>