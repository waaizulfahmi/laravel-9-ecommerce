<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Product</title>
</head>
<body>
    @livewire('show-posts');
    @foreach ($product as $item)
        <p>Name : {{$item->name}}</p>
        <p>Stock : {{$item->stock}}</p>
        <img src="{{url('storage/'.$item->image)}}" alt="gambar product" height="100px">
        <form action="{{route('show_product', $item )}}" method="get">
            <button type="submit">Show Detail</button>
        </form>
    @endforeach
</body>
</html>