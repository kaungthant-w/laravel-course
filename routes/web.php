<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("landing");
});

Route::get('/home', function() {
    $num1 = 20;
    $num2 = 230;
    $result = $num1 + $num2;
    return view("home", ["name" => "kyaw kyaw", "lecture" => "Programming", "num1" => $num1, "num2"=> $num2, 'result' => $result]);
});

// Route::get('/about', function() {
//     $num1 = 30;
//     $num2 = 32;
//     $result = $num1 + $num2;
//     return view("aboutPage", ["message" => "This is testing message from server site", "result" => $result]);
// });

// Route::view('URI', 'VIEW', 'Parameter');
Route::view('about', 'aboutPage',["message" => "This is testing message from server site", "num1" => 10, "num2" => 20]);

Route::view("customer/help/service", 'service',["name" => "Tun Tun" ,"fruits" => ["apple", "orange", "mango", "lemon", 'watermelon']])->name("ser");

Route::get("resultPage", function() {
    return view("result");
});

// Route::get("resultPage/{num1}/{num2}", function($num1, $num2) {
//     return view('result', ['result'=> $num1 + $num2]);
// });

Route::get("resultPage/{num1}/{num2}", function($num1, $num2) {
    $result = $num1 + $num2;
    return view("result", ['result' => $result]);
})->name('myCalculation');

Route::get("paraPass/{name?}", function($myName = "Your Name is empty") {
    return $myName;
})->name("passWithRoute");

Route::get('/contact', function() {
    return view("contact", ["lecture" => "Programming"]);
});

Route::get("/customer/list", function() {
    return view("customer.list");
});

Route::get("vipMaleCustomer", function() {
    return view("customer.vipCustomer.male.list");
});

Route::get("vipFemaleCustomer", function() {
    return view("customer.vipCustomer.female.list");
});

Route::get("/user/contact", function() {
    return "user contact page";
});

Route::get("/customer/name", function() {
    return "customer name";
});


Route::get("/customer/{phone}", function($phone) {
    return "customer phone number is ". $phone;
});


Route::get('/customer/{name}/{age}', function($name, $age) {
    return "customer name is ".$name." customer age is ".$age;
});

Route::get('/customer/{name}/register/{age}', function($name, $age) {
    return "customer name is ".$name." his age is ".$age;
});

Route::get('/customer/{name?}/{age?}', function($name="Aung Aung", $age="24") {
    return "customer name is ".$name." his age is ".$age;
});


Route::get('/product/{item?}/{num?}', function($item=null, $num=null) {
    return "Product name is ".$item." item num is ".$num;
});


