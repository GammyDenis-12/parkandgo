<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Available Parking Spaces</h1>
@foreach ($values as $item)
 <button type="hidden">{{ $item}}</button>
@endforeach

</body>
</html>