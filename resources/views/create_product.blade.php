<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Products</title>
</head>
<body>
    <form action="{{route('store_product')}}" method="post" enctype="multipart/form-data"> 
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="decs">
        <input type="number" name="price" placeholder="price">
        <input type="number" name="stock" placeholder="stock">
        <input type="file" name="image" placeholder="file">

        <button type="submit">Submit</button>
        
    </form>
</body>
</html>