<?php

namespace App\Http\Controllers;

use App\catgory;
use Illuminate\Http\Request;

class CatgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $catgorys=catgory::orderBy('id','DESC')->get();
        return view('categories',compact('catgorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagetitle='دسته بندی جدید';
        return view('create',compact('pagetitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData=$request->validate([
            'title'=>'required|unique:catgories|max:10',
            'description'=>'required',
        ]);
      $catgorery=new catgory([
          'title'=>$request->get('title'),
          'description'=>$request->get('description'),
          'active'=>$request->get('active')
      ]);
      $catgorery->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\catgory  $catgory
     * @return \Illuminate\Http\Response
     */
    public function show(catgory $catgory )
    {
        return view('catgory',compact('catgory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catgory  $catgory
     * @return \Illuminate\Http\Response
     */
    public function edit(catgory $catgory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catgory  $catgory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catgory $catgory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catgory  $catgory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catgory $catgory)
    {
        //
    }
}
