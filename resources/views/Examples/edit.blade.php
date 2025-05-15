<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <h1>This is the create page</h1>
    

    <form action="{{ route("Example.update",["Example"=>$Example]) }} " method="post">
        @csrf
        @method('put')
    
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <label for="">Firstname</label>
        <input type="text" name="firstname" id="" placeholder="firstname" value="{{$Example->firstname  }}" >

        <br>
        <br>
        <label for="">Lastname</label>
        <input type="text" name="lastname" id="" placeholder="lastname" value="{{$Example->lastname  }}"><br><br>

        <input type="submit" value="Update">

       


       
    </form>
</body>
</html>