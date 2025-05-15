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
    

    <form action="{{ route('Example.store') }}" method="post">
        @csrf
        @method('post')
    
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
        <input type="text" name="firstname" id="" placeholder="firstname">

        <br>
        <br>
        <label for="">Lastname</label>
        <input type="text" name="lastname" id="" placeholder="firstname"><br><br>

        <input type="submit" value="Submit">

       


       
    </form>
</body>
</html>