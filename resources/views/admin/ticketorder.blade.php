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
        Name : <input type="text" name="name" placeholder="Enter your  Name">
        @error('name')
        <small> {{$message}}</small>
        @enderror
        phone : <input type="text" name="phone" placeholder="Enter your  Phone">
        @error('phone')
        <small> {{$message}}</small>
        @enderror
        Email : <input type="text" name="email" placeholder="Enter your  Email">
        @error('email')
        <small> {{$message}}</small>
        @enderror
        Address : <input type="text" name="address" placeholder="Enter your  Address">
        @error('address')
        <small> {{$message}}</small>
        @enderror
        money: <input type="number" name="money" placeholder="Enter your  Money">
        @error('Money')
        <small> {{$message}}</small>
        @enderror
        Guest: <input type="text" name="guest" placeholder="Enter your  Guest">
        @error('guest')
        <small> {{$message}}</small>
        @enderror
        <input type="submit" name="submit">
    </form>
</body>
</html>

               
