<?php

namespace App\Http\Controllers;
use App\catgory;
use Illuminate\Http\Request;
use Mockery\Exception;

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

        $message=[

    'title.required'=>'لطفا فیلد را پر کنید ',
    'title.unique'=>'فیلد ها تکراری است ',
    'title.max'=>'بیش از ده کاراکتر می باشد',
'description.required'=>'لطفا فیلد را پر کنید',
];
        $validatedData=$request->validate([
            'title'=>'required|unique:catgories|max:10',
            'description'=>'required',
        ],$message);
      $catgorery=new catgory([
          'title'=>$request->get('title'),
          'description'=>$request->get('description'),
          'active'=>$request->get('active')
      ]);
      try{
       $catgorery->save();
      }
      catch (Exception $exception){
          return redirect('categories')->with('waring',$exception);
      }
      $catgorery->save();
      $msg="ذخیره دسته بندی با موفقیت بود ";
      return redirect('categories')->with('success',$msg);
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
$pagetitle="ویرایش اطلاعات";

    return view('edit',compact('catgory','pagetitle'));
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

        $message=[
            'title.required'=>'لطفا فیلد را پر کنید ',
            'title.unique'=>'فیلد ها تکراری است ',
            'title.max'=>'بیش از ده کاراکتر می باشد',
            'description.required'=>'لطفا فیلد را پر کنید',
        ];
        $validatedData=$request->validate([
            'title'=>'required|unique:catgories|max:10',
            'description'=>'required',
        ],$message);

        try{
            $catgory->update($request->all());
        }
        catch (Exception $exception){
            return redirect('categories')->with('waring',$exception);
        }
        $msg="ویرایش با موفقیت انجام شد ";
        return redirect('categories')->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catgory  $catgory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catgory $catgory)
    {

        $catgory->delete();
        $msg="حذف با موفقیت انجام شد با موفقیت انجام شد ";
        return redirect('categories')->with('success',$msg);



    }
}
