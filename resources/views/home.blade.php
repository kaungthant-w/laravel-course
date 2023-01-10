<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" ></script>

    <!-- css  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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

    {{url('home')}} <br>
    {{url('about')}} <br>
    {{url('contact')}} <br>
    <h1 style="color:red;">Home Page</h1>
    <h3 class="h3">{{ $name }}</h3>
    {!! $name !!}
    <h3> {{ $num1}} + {{ $num1}} = {{ $result}} </h3>
    <span class="text-muted">{{$lecture}}</span>

    <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis repellat autem velit voluptas praesentium optio, quaerat officia nulla. Expedita, ratione.</p>


    <div class="mb-5">
    <a class="btn btn-outline-success" href=" {{url('resultPage/20/40')}} ">Click me to transfer</a>
        <a class="btn btn-outline-danger" href=" {{route('myCalculation', [50, 40])}} ">Second Click</a>
        <a class="btn btn-outline-danger" href=" {{ route('passWithRoute','Code-Lab') }} ">Param Pass</a>
    </div>

    <img src="{{asset('image/amazingNight.jpg')}}" alt="">

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
