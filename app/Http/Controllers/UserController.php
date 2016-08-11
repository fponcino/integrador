<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Validator;



class UserController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }


    public function editUser()
    {
    	return view('updateUser');
    }

    public function updateUser(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|numeric',
            'phoneNumber' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'date' => 'required|date',
        ]);

        User::where('id', Auth::user()->id)
    		->update(['phoneNumber' => $request->input('phoneNumber'), 'email' => $request->input('email'), 'address' => $request->input('address')]);

    	return back();
    }

    public function showSearchPeople(Request $request)
    {
        return view('searchPeople');
    }

    public function showPeople(Request $request)
    {
        $parameter = $request->search;
        $people = (User::where('name', 'LIKE', "%$parameter%")->get());
        return view('searchPeople', ['people' => $people]);
    }

    public function profile() {
         $orders = Auth::user()->orders;
         $orders->transform(function($order, $key) {
             $order->cart = unserialize($order->cart);
             return $order;
         });
         return view('profile', ['orders' => $orders]);
     }

    }
