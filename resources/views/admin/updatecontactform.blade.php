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
        Email:<input value="{{$data->email}}" type="text" name="email"/>
        phone:<input value="{{$data->phone}}" type="text" name="phone"/>
        message :<input value="{{$data->message}}" type="text" name="message"/>
        <input type="submit" name="submit">
    </form>
</body>
</html>