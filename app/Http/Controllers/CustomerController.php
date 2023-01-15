<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // customer home page
    public function home() {
        return view("customer.insert");
    }

    // create customer data
    public function insert(Request $request) {


        // Carbon::now();
        // dd(Carbon:now());
        // dd($request->all());

        // first way
        $data = [
            'name' => $request -> customerName,
            'address' => $request -> customerAddress,
            'phone' => $request -> customerPhone,
            'created_at' => Carbon::now(),
            'updated_at' => '2035-11-11 10:23:13'
        ];

        Customer::create($data);
        return "Create Success...";

        // sec ways
        // $record = new Customer;
        // $record->name = $request->customerName;
        // $record->address = $request->customerAddress;
        // $record->phone = $request->customerPhone;
        // $record->created_at = Carbon::now();
        // $record->updated_at = Carbon::now();
        // $record->save();

        // return "Created Success...";
    }

    //get customer data
    public function read() {
        // $data = new Customer;
        // dd($data -> findOrFail(3)->toArray());

        // dd(Customer::find(1)->toArray());
        dd(Customer::where('address','yangon')->get()->toArray());
    }
}
