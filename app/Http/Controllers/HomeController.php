<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\Product;
use App\wishlist;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*  public function __construct()
    {
        $this->middleware('auth');
    
    } */

    public function index()
    {


        //getting all the products 
        $products= Product::latest()->get();
        return view('/index')->with('products', $products);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  

    public function logout()
    {
        auth::logout();
        return redirect('home');
    }
}
