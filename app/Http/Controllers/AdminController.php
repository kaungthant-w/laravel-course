<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPostTest(Request $request) {
    $request -> all();
    $userData = [
        'name' => $request -> userName,
        'age' => $request -> userAge,
        'address' => $request -> userAddress,
        'gender' => $request -> userGender
    ];

    // dd($userData);
    dd($request -> all(), $userData);
    }
}
