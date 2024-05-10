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
        Details : <input type="text" name="details" placeholder="Enter your details">
        @error('details')
        <small> {{$message}}</small>
        @enderror
        Rate: <input type="text" name="rate" placeholder="Enter your  rate">
        @error('rate')
        <small> {{$message}}</small>
        @enderror
        Feedback: <input type="text" name="feedback" placeholder="Enter your  feedback">
        @error('feedback')
        <small> {{$message}}</small>
        @enderror
        <input type="submit" name="submit">
    </form>
</body>
</html>

               
