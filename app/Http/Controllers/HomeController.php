<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

#bu dogru yanlis bilmiyorum
    public function home()
    {
        //homeindex sayfasi cagrdim
        return view('home.index');
    }
    public function index()
    {
        //index sayfasi cagrdim
        return view('admin.index');
    }

     public function login()
    {
       return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'the provided credentials do not match our records.',
            ]);
        } else {
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

    public function aboutus()
    {
        //homeindex sayfasi cagrdim
        return view('home.about');
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
