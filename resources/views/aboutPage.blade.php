<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" ></script>
</head>
<body class="text-center">
    <div class="navbar bg-light navbar-expand-lg shadow">
        <ul class=" navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="{{url('home')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('ser')}}">Service</a></li>
            
        </ul>
    </div>
    <h1 class="text-danger">About Page </h1>
    <h3>{{$message}}</h3>
    <h2>{{$num1}} + {{$num2}}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ut sit ex consectetur sequi dicta deleniti maxime. Beatae, excepturi quam.</p>
</body>
</html>
