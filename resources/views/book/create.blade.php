<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <a href="{{route('book.index')}}">Home |</a> 
  <a href="{{route('book.create')}}">create new </a> 
  
<form action="{{route('book.store')}}" method="post">
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value=""><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="pages">Pages:</label><br>
        <input type="text" id="pages" name="pages" value=""><br>
        <label for="year">Release date:</label><br>
        <input type="text" id="year" name="year" value=""><br><br>
        <input type="submit" value="Submit">
        @csrf
      </form> 
</body>
</html>