<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif


    <a href="{{route('book.index')}}">Home |</a> 
    <a href="{{route('book.create')}}">create new </a> 
    <h1>Knygų sąrašas</h1>
<table>
    <tr>
      <th>Author</th>
      <th>title</th>
      <th>pages</th>
      <th>year</th>
      <th>edit</th>
      <th>delete</th>
    </tr>

    @foreach ($books as $book)
  
    <tr>
        <td>{{$book->author}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->pages}}</td>
        <td>{{$book->year}}</td>
        <td> <a href="{{route('book.edit',$book)}}">edit</a> </td>
        <td>
            <form action="{{route('book.destroy',$book)}}" method="post">
            <button type="submit">delete</button>
            @csrf
            </form>
            
        </td>
      </tr>
    @endforeach
   





  </table>

  
 
</body>
</html>