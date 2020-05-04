<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\wishlist;



class AdminController extends Controller
{
    public function _construct()
    {
        $this.authorize($user);
    }
    public function index(Request $request)
    {
          $products=  Product::latest()->paginate(9);
          return view('/removeProduct')->with('products',$products);
    }

    public function removeProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/removeProduct');
    }

    public function store(Request $request)
    {
        
       $request->validate([
        'image'=>'nullable|image|max:1999',
        'onSale'=> 'required',
       ]);


        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->extension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension ;
            $path =$request->file('image')->storeAs('public/img',$fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        
       
        $product = new Product();
        $product->name = request('name');
        $product->color = request('color');
        $product->size = request('size');
        $product->type = request('type');
        $product->image= $fileNameToStore;
        $product->price = request('price');
        $product->brand = request('brand');
        $product->category = request('category');
        $product->onSale = request('onSale');

        $product->save();
         
        return redirect('/makeProduct');    


    }
}
