<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $pagetitle='خوش امدید ';
        $post=DB::table('posts')->get();
        $postcount=DB::table('posts')->count();
return view('posts',compact('post','postcount'));
    }
}
