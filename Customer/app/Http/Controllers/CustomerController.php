<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //

    public function details(Request $req){
        
        $st = Customer::where('id',$req->id)->first();
        return view('customer.details')
        ->with('st',$st);

        //$students = student :: where ('st_id', '=',$req->st_id )

        

    }
    public function list(){

        $customers = Customer::all();        
        return view('customer.list')->with('customers',$customers);

    }

    function registration(){
        return view('customer.registration');
    }

    function registrationSubmit(Request $req){
        $this->validate($req,
            [
                
                
                "name"=>"required|max:50|min:3|regex:^[a-zA-Z\s\.\-]+$^",
                "password"=>"required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/",
                "email"=>"required|email",
                "type"=>"required",
            
            ],
        
            [
                
                "name.required"=>"Please provide your name",
                "password.required"=>"Please provide your password",
                "name.max"=>"Name should not exceed 50 characters",
                "email.required"=>"Please provide email",
                "type.required"=>"Please provide type",
              
            ]);
            $customers = Customer::all();
            $st = new Customer();
            $st->name = $req->name;
            $st->email =$req->email;
            $st->password =$req->password;
            $st->save();
            return view('customer.list')->with('customers',$customers);
    }

}
