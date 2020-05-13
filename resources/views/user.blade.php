<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <title>Respository pattern in laravel</title>
</head>
<body>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
            </thead>
        <tbody>
        @foreach($userRepository as $key=> $value)
            <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>