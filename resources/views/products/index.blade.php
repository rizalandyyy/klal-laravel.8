<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Ini product
    {{-- <p>{{ $title }}</p> --}}
    {{-- <p>{{ $description }}</p> --}}
    {{-- @foreach ($data as $item)
        {{ $item }}
    @endforeach --}}

    {{-- <p>{{ $products }}</p> --}}

    <a href="{{ route('products') }}">Products</a>
</body>
</html>