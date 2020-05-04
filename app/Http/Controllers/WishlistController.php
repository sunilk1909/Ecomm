<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Product;
use App\wishlist;
use App\user;

class WishlistController extends Controller
{
    public function likes(Request $request)
    {
       $id = $request->input('id');
       $user_id= auth::id();
       $wish = new wishlist();
       $wish->product_id = $id;
       $wish->user_id = $user_id;

       $unique= wishlist::where([['user_id',$user_id],['product_id',$id]])->get();

        if($unique->isEmpty())
            $wish->save();
        
            return redirect('/shop');
    }

    public function Wishlist()
    {
        $user_id = auth::id();
        $wish = wishlist::Where('user_id', $user_id)->get()->pluck('product_id');
        if($wish->isNotEmpty())
        {
            foreach($wish as $product_id)
            {
                $product = Product::find($wish);
               
            }
            return view('/wishlist')->with('products', $product);
        }
        
            return view('/wishlist');
        
    }


    public function unlike($id)
    {
        $product = Product::find($id);
        $user_id = auth::id();

        $wishlist= wishlist::where([['user_id', $user_id],['product_id', $product->id]])->get()->pluck('id');   
        if($wishlist->isNotEmpty())
        {
            foreach($wishlist as $wish)
            {
                $remove = wishlist::find($wish);
                $remove->delete();
            }
        }
        
         return redirect('/wishlist');
    }



    public function wishToCart($id)
    {
        $product= Product::find($id);
        $user_id = Auth::user();

        
        //Add the product to Cart Table
        $product->users()->sync($user_id, false);
        
        // Remove the product from the Wish table and back to wish page 

        $this->unlike($product->id);

        return redirect('/wishlist');

    }
}
