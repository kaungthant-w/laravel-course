<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="navbar bg-light navbar-expand-lg shadow">
        <ul class=" navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="{{url('home')}}">Home</a></li>

            <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('customer/help/service')}}">Service</a></li>
        </ul>
    </div>
    <h1 class=" text-danger">This is service Page</h1>

    @php
        echo "hello World";
    @endphp

    {{ date("d/m/Y")}}
    {{ date("d m Y")}}

    @if (false)
        <h1>This is false status</h1>
        <h2>if</h2>
    @elseif (false)
        <h2>This is true status</h2>
        <h3>Else if</h3>
    @else
        <h2> This is flase status </h2>
        <h3>else</h3>
    @endif

    @foreach ($fruits as $fruit )
        <h3>{{$fruit}}</h3>
    @endforeach

    @for ($i = 0; $i < count($fruits); $i++)
        <h1 class="text-danger">This is {{$fruits[$i]}}</h1>
    @endfor

    @isset($name)
        <h1 class="badge bg-info"> {{$name}} </h1>
    @endisset


    @switch($name)
        @case("Kyaw Kyaw")
            <h2 class="btn btn-success">{{$name}}</h2>
            @break
        @case("Tun Tun")
            <h2 class="btn btn-primary">{{$name}}</h2>
            @break
        @default
        <h1 class="btn btn-warning">empty</h1>
    @endswitch

    @for ($i=0; $i < 10; $i++)
        <p>This is {{$i}}</p>
    @endfor



</body>
</html>
