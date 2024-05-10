<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('postData')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">
        Name :<input value="{{$data->name}}" type="text" name="name"/>
        phone:<input value="{{$data->phone}}" type="text" name="phone"/>
        Email:<input value="{{$data->email}}" type="text" name="email"/>
        
        address:<input value="{{$data->address}}" type="text" name="address"/>
        money:<input value="{{$data->money}}" type="text" name="money"/>
        guest :<input value="{{$data->guest}}" type="text" name="guest"/>
        <input type="submit">
    </form>
</body>
</html>