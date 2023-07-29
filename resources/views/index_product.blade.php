<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Product</title>
</head>
<body>
    @livewire('show-posts');
    @foreach ($product as $item)
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2"> {{$item->name}}</div>
          <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
          </p>
        </div>
        </div>
        <p>Name : {{$item->name}}</p>
        <p>Stock : {{$item->stock}}</p>
        <img src="{{url('storage/'.$item->image)}}" alt="gambar product" height="100px">
        <form action="{{route('show_product', $item )}}" method="get">
            <button type="submit">Show Detail</button>
        </form>
    @endforeach
</body>
</html>