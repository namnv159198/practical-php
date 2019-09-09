<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <a class="btn btn-primary mb-3" href="{{url('/index')}}">BACK</a>
    <form  action="{{url("/add-student")}}" method="post">
        @csrf
        <div class="form-group ">
            <label> STUDENT NAME</label>
            <input class="form-control" type="text" name="name" value="{{old("name")}}" placeholder="Student name" required>
            @if($errors->has("name"))
                <p class="error" style="color:red">{{$errors->first("name")}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>age</label>
            <input class="form-control" type="number" name="age" value="{{old("age")}}" placeholder="age" required>
            @if($errors->has("age"))
                <p class="error" style="color:red">{{$errors->first("age")}}</p>
            @endif
        </div>


        <div class="form-group ">
            <label> ADDRESS</label>
            <input class="form-control" type="text" name="address" value="{{old("address")}}" placeholder="address" required>
            @if($errors->has("address"))
                <p class="error" style="color:red">{{$errors->first("address")}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>TELEPHONE</label>
            <input class="form-control" type="number" name="telephone" value="{{old("telephone")}}" placeholder="telephone" required>
            @if($errors->has("telephone"))
                <p class="error" style="color:red">{{$errors->first("telephone")}}</p>
            @endif
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-danger">ADD STUDENT</button>
        </div>
    </form>
</div>
</body>
</html>




