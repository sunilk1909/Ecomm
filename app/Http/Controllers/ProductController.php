<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\wishlist;

class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */


     
    public function index(Request $request)
    {
      
      

    if($request->input('filter') == Null)
        { 
            
            $products = Product::latest()->paginate(9);
        }
    

    elseif($request->input('filter') == 'filter')
        {
            
            $category = $request->input('category');
            $brand =  $request->input('brand');
           
            $size =  $request->input('size');
            $tags = $request->input('Tags');
            $products= Product::where([['category', $category],['brand', $brand], ['size',$size],
            ['type', $tags]])->paginate(9);

          
        }
        elseif($request->input('filter') == 'Male' || 'Female' ||'Children')
        {
    
        $category= $request->input('filter');
        
        $products= Product::where('category',$category)->latest()->paginate(9);
     
            }
    

       return view('/shop')->with('products',$products);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
/* 
    public function man()
    {
        $products = Product::where('category', 'Male')->paginate(6);
        return view('/shop')->with('products',$products);
    } */


    public function addToCart(Request $request)
    {
            
            $product = Product::find($request->id);
            
            $user_id = auth::id();
            
            $product->users()->sync($user_id);

            return redirect('/shop');
            
    }

    public function cart(Request $request)
    {

        
        $user = auth::user();
       
        $products = $user->products;

        return view('/shoppingcart')->with('products', $products);

    }

    public function removeFromCart(Request $request)
    {
       
        $id = $request->input('id');
        $user = auth::user();
        
        $user->products()->detach($id);
        
        return redirect('/shoppingcart');
        
    }

    


    
    

}

