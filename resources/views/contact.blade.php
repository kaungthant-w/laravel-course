<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
    <h3 class="text-danger">Contact page</h3>
    <h4> {{$lecture}} </h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ipsa deserunt repudiandae rerum nulla expedita delectus facere dicta illum pariatur.</p>
</body>
</html>