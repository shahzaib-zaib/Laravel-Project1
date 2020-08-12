@extends("Layout/master")


@section("showdata")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sports Array</h1>
    @foreach($sports as $s)
    <li>{{ $s }}</li>
    @endforeach

    <hr>

    <h1>Color Array</h1>
    @foreach($color as $c)
    <li>{{ $c }}</li>
    @endforeach
</body>
</html>
@endsection