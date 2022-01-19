<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rezervation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {

       $allreservation = Rezervation::all();
       $categories = Category::all();
       $vehicle = Product::all();
        return view('admin.index',['categories'=>$categories,'allreservation'=>$allreservation,'vehicle'=>$vehicle]);

    }


}
