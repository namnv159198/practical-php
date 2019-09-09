<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset("bootstrap/css")}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<a class="btn btn-danger"  style="width: 200px" href="{{url('/add-student')}}">ADD STUDENT</a>
<table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
    <th scope="col">STUDENT ID</th>
    <th scope="col">NAME</th>
    <th scope="col">AGE</th>
    <th scope="col">ADRESS</th>
    <th scope="col">TELEPHONE</th>
    </thead>
    <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->telephone}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $students->links() !!}
</body>
</html>



