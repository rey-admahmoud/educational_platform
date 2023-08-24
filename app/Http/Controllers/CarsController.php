<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\category;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=car::get();
        return view('admin.cars.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datacategory=category::select('name_category','id_category')->get();
        return view('admin.cars.add_car',['datacategory'=>$datacategory]);
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
            'id'=>'required|max:10000|min:1|unique:cars',
            'name'=>'required|max:50|min:1',
            'price'=>'required',
            'model'=>'required',
            'desc_course'=>'required',
            'image'=>'nullable|image',
        ]);
        
        if($request->file('image')){
            $imagename=$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('cars',$imagename,'upload');
        }else{
            $imagename='null';
        }

        car::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'model'=>$request->model,
            'desc_course'=>$request->desc_course,
            'image'=>$imagename,
            'id_category'=>$request->id_category
           
        ]);
        return redirect()->route('cars.create')->with('msg','added.......................');
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
        $data=car::findorfail($id);
        $imagename=$data['image'];
        $datacategory=category::select('id_category','name_category')->get();
        return view('admin.cars.edit',['data'=>$data,'datacategory'=>$datacategory]);
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
        $data=car::findorfail($id);

      if($request->file('image')){
        $imagename=$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('cars',$imagename,'upload');
      }else{
        $imagename='null';
      }
       
        $data->update([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'model'=>$request->model,
            'desc_course'=>$request->desc_course,
            'image'=>$imagename,
            'id_category'=>$request->id_category
        ]);
        return redirect()->route('cars.index')->with('msg','updated.......................');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=car::findorfail($id);
        $data->delete();
        return back();
    }
    public function archive(){
        $data=car::onlyTrashed()->get();
        return view('admin.cars.archive',['data'=>$data]);
    }

    public function forcedelete( $id){
        $data=car::withTrashed()->findOrFail($id);
        $data->forceDelete();
        return back();
    }
    public function restore($id){
        $data=car::withTrashed()->findOrFail($id);
        $data->restore();
        return back();  
     }

    
}
