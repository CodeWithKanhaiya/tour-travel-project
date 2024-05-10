<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('insertData')}}" method="POST">
        @csrf
        Date : <input type="date" name="date" placeholder="Enter your  date">
        @error('date')
        <small> {{$message}}</small>
        @enderror
        User : <input type="text" name="name" placeholder="Enter your name">
        @error('name')
        <small> {{$message}}</small>
        @enderror
        Package: <input type="text" name="package" placeholder="Enter your  package">
        @error('package')
        <small> {{$message}}</small>
        @enderror
        
        <input type="submit" name="submit">
    </form>
</body>
</html>

               
