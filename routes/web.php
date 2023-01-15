<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

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

// Route::get("/customer/list", function() {
//     return view("customer.list");
// });

// Route::get("vipMaleCustomer", function() {
//     return view("customer.vipCustomer.male.list");
// });

// Route::get("vipFemaleCustomer", function() {
//     return view("customer.vipCustomer.female.list");
// });

Route::get("/user/contact", function() {
    return "user contact page";
});

// Route::get("/customer/name", function() {
//     return "customer name";
// });


// Route::get("/customer/{phone}", function($phone) {
//     return "customer phone number is ". $phone;
// });


// Route::get('/customer/{name}/{age}', function($name, $age) {
//     return "customer name is ".$name." customer age is ".$age;
// });

// Route::get('/customer/{name}/register/{age}', function($name, $age) {
//     return "customer name is ".$name." his age is ".$age;
// });

// Route::get('/customer/{name?}/{age?}', function($name="Aung Aung", $age="24") {
//     return "customer name is ".$name." his age is ".$age;
// });


Route::get('/product/{item?}/{num?}', function($item=null, $num=null) {
    return "Product name is ".$item." item num is ".$num;
});

Route::get('sum/{num1}/{num2}', function($num1, $num2){
    return $num1 + $num2;
});

Route::get('add/{num1}/{num2}', fn($num1, $num2) => $num1 + $num2);


Route::get('getData', function(){
    $data = file_get_contents("https://fakestoreapi.com/products/");
    $jsonData = json_decode($data);

    // return $jsonData;
    // echo "<pre>";
    // var_dump($jsonData);
    // dd($jsonData);
    // dd("hello");
    // dd($jsonData[0]->title);
    // dd($jsonData[0]->image);
    // dd($jsonData[0]->price);

    // $data = array_filter($jsonData, fn($jsonData) => $jsonData->price);
    // $result = array_filter($jsonData, fn($j) => $j->price <= 50);
    // $result = array_filter($jsonData, fn($j) => $j->price >= 50);
    $result = array_filter($jsonData, fn($j) => $j->price < 10);
    dd($result);

});

Route::get('laraGetData', function() {
    $data = Http::get("https://fakestoreapi.com/products") -> object();
    // $data = collect($data) -> where("price",'<',10)->toArray();
    // $data = collect($data) -> last();
    // $data = collect($data) -> max();
    // $data = collect([1,2,34,3,5,23]) -> max();
    $data = collect($data)->whereIn("price",[109,168]) -> toArray();

    // $data = $data -> json();
    // $data = $data -> object();
    // dd($data[0]["price"]);
    // dd($data[0]["image"]);
    // dd($data[0]->title);
    // dd($data);
    // dd($data[6] -> title);
    // foreach($data as $item) {
    //     echo $item -> title."<br>";
    // }

    // dd($data -> title);
    dd($data);
});

// Route::view('customers/register', 'customerRegister');

//POST method
// Route::post('postTest/',[App\Http\Controllers::class, 'adminPostTest'])->name('customerPostTest');
// Route::post('postTest/',[AdminController::class, 'adminPostTest'])->name('customerPostTest');

// customer
// Route::get("helloTest", [CustomerController::class, 'oputputHello']);
// Route::get('compact/list', [CustomerController::class,"compactList"]);

// customer
Route::get('customer/home', [CustomerController::class,'home'])->name("customer#home");
Route::post('customer/insert', [CustomerController::class,'insert'])->name("customer#insert");
Route::get('customer/read', [CustomerController::class,'read'])->name("customer#read");
