<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <title>Document</title>
</head>
<body>
  <h1 class="ah">  This is the Index page </h1>

  <div class="aside">
    <div class="empty"></div>
    <div class="beside"> <a href="{{ route('Example.create') }}" class="beside">Create a new data</a></div>
  </div>


<div class="table">
  <table border="3" class="tabl">
    <thead>
      <tr>
        <th class="th">ID</th>
        <th class="th">Firstname</th>
        <th class="th">Lastname</th>
        <th class="edit">Edit</th>
        <th class="delete">Delete</th>

      </tr>
    </thead>
    @foreach ( $Example as $Example )
   <tr>
    <td class="data">{{ $Example->id }}</td>
    <td class="data">{{ $Example->firstname }}</td>
    <td class="data">{{ $Example->lastname }}</td>
    <td class="data"> <a href="{{route('Example.edit',['Example'=>$Example])}}">Edit</a> </td>

    <td class="data2">
    <form action="{{route('Example.delete',['Example'=>$Example])}}" method="post">
      @csrf
      @method("delete")
    <input type="submit" value="Delete" class="data2">
     </form>
     </td>
   
   </tr>
    @endforeach
   
  </table>
</div>

    
</body>
</html>