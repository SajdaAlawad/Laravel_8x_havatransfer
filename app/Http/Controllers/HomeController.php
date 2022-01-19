<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=' , 0)->with('children')->get();
    }

#bu dogru yanlis bilmiyorum
    public static function getsetting()
    {
        return Setting::first();
    }
    public static function countreview($id)
    {
        return Review::where('product_id',$id)->count();
    }
    public static function avrgreview($id)
    {
        return Review::where('product_id',$id)->average('rate');
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price_km','slug')->limit(4)->get();
        $daily = Product::select('id','title','image','price_km','slug')->limit(3)->inRandomOrder()->get();
        $last = Product::select('id','title','image','price_km','slug')->limit(3)->orderByDesc('id')->get();
//        print_r($slider);
//        exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public function product($id,$slug)
    {

        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews = Review::where('product_id',$id)->get();

        #print_r($data);
        #exit();
        return view('home.product_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }


    public function addtocart($id)
    {
        echo "Add To Cart <br>";
        $data= Product::find($id);
        print_r($data);
        exit();
    }

    public function categoryproducts($id,$slug)
    {
        $datalist= Product::where('category_id',$id)->get();
        $data =Category::find($id);
//        print_r($data);
//        exit();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }


    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }


    public function location()
    {
        $setting = Setting::first();
        return view('home.location', ['setting' => $setting]);
    }
    public function sendmessage(Request $request)
    {
        $request->validate([
            'name' => 'required| max:255',
            'subject' => 'required',
        ]);

        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('info','Mesajimiz Kaydedilmiştir,Teşekkürler.');



    }

    public function faq()
    {
       $datalist = Faq::all()->sortBy('position');
       return view('home.faq',['datalist'=>$datalist]);
    }

     public function login()
    {
       return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'the provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


   public function test($id , $name)
   {
       $data['id']=$id;
       $data['name'] =$name;
       return view('home.test',$data);
      #return view('home.test',['id'=> $id,'name' =>$name]);

      # echo "Id Number : ", $id;
      # echo "<br>Name : ", $name;
      # for($i=1 ; $i<=$id ; $i++)
      # {
      #     echo "<br> $i - $name";
      # }

   }
}
