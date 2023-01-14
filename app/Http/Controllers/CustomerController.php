<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function oputputHello() {
        // return "Hello Testing, customer controller";
        dd("Hello dd");
    }

    public function compactList() {
        // return view('compactTest',['message'=>'hello this is testing message']);

        $message = '<h1>hello this is testing message</h1>';
        $error = 'this is error message';
        $name = 'my name is sithu';
        return view('compactTest',compact('message','error','name'));
    }
}
