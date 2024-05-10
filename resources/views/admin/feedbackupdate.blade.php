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
        Date:<input value="{{$data->date}}" type="text" name="date"/>
        Detail:<input value="{{$data->details}}" type="text" name="details"/>
        Rate:<input value="{{$data->rate}}" type="text" name="rate"/>
        Feedback:<input value="{{$data->feedback}}" type="text" name="feedback"/>
        <input type="submit">
    </form>
</body>
</html>