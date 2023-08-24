<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryfrontController extends Controller
{
    public function category(){
        $data=category::get();
        return view('front.categories' , ['data'=>$data]);
    }
}
