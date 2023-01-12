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
<body class="text-center d-flex flex-column ">

    <h3 class="mt-5">Customer Register Page</h3>
    <form action="{{ route('customerPostTest', [10, 'code lab'])}}" method="POST" class="w-50 m-auto">
        @csrf
        Name: <input type="text" name="userName" class="form-control"> <br>
        Age: <input type="number" name="userAge" class="form-control"> <br>
        Address: <input type="text" name="userAddress" class="form-control"> <br>
        
        Gender :
        <select name="userGender" class="form-control">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>

        <input type="submit" class="btn btn-primary mt-3" value="Send">
    </form>
    
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
