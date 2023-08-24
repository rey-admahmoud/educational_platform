<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=category::get();
        return view('admin.category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add_track');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_category'=>'unique:categories|required|numeric',
            'name_category'=>'required',
            'desc_category'=>'required',
            'image'=>'nullable|image'
        ]);
        if($request->file('image')){
            $imagename=$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('category',$imagename,'upload');
        }else{
            $imagename='null';
        }
        category::create([
            'id_category'=>$request->id_category,
            'name_category'=>$request->name_category,
            'desc_category'=>$request->desc_category,
            'image'=>$imagename
        ]);
        return redirect()->route('category.create')->with('msg','added.............................');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=category::findorfail($id);
        return view('admin.category.edit' , ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=category::findorfail($id);
        $request->validate([
            'id_category'=>'required|numeric',
            'name_category'=>'required',
            'desc_category'=>'required',
            'image'=>'nullable|image'
        ]);
        if($request->file('image')){
            $imagename=$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('category',$imagename,'upload');
        }else{
            $imagename='null';
        }
        $data->update([
            'id_category'=>$request->id_category,
            'name_category'=>$request->name_category,
            'desc_category'=>$request->desc_category,
            'image'=>$imagename
        ]);
        return redirect()->route('category.index')->with('msg','updated..................................');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data=category::findorfail($id);
       $data->forcedelete();
       return back();
    }
    
}
