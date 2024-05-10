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
        Date:<input value="{{$data->date}}" date="text" name="date"/>
        phone:<input value="{{$data->name}}" type="text" name="name"/>
        
        Package:<input value="{{$data->package}}" type="text" name="package"/>

        <input type="submit">
    </form>
</body>
</html>