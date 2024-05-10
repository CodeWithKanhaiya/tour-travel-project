<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(isset($success))
        {{$success}}
        @endif
        <button><a href="{{route('contact')}}">Add data</a></button>
    <table border="1">
   <tr>
    <th>#id</th>
    <th>Name</th>
    <th>Email</th>
    <th>phone</th>
    <th>message</th>
    <th>Created At</th>
    <th>Action</th>
</tr> 
@foreach($all as $val)
    <tr>
        <td>{{$val->id}}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->email}}</td>
        <td>{{$val->phone}}</td>
        <td>{{$val->message}}</td>
        <td>{{$val->created_at}}</td>
        <td><a href="{{route('update',$val->id)}}">Edit</a>
            <a href="{{route('delete',$val->id)}}">Delete</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>