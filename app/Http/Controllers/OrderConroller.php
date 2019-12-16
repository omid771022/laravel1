<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;
class OrderConroller extends Controller
{
    public function orders(){
        $pagetitle='لیست فاکتور های ما ';
        $orders=order::orderBy('id','DESC')->get();
        return view('orders',compact('orders','pagetitle'));
    }
}
