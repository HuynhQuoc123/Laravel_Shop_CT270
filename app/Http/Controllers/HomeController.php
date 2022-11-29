<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;




use Illuminate\Http\Request;
class HomeController extends Controller
{
    //
    public function checkLogin(){
        if(Auth::user()->id_role === 1){
            return redirect()->route('dashboard');
        }
        return redirect()->route('home');
    }
    public function index()
    {
        $data = Banner::all()->toArray();
        return view('guest.index',compact('data'));
    }

    public function showListProductUserNormal(Request $request)
    {
            $data = Product::paginate(8);                 
            
            if($request->idCat && $request->idCat != -1){

                $data = Category::find($request->idCat)->product()->paginate(4);
            }
    
        return view('guest.product',compact('data'));
    
    }

    public function showProductDetail($id){
        $product = Product::find($id)->toArray();
        $data = Product::find($id)->product_image->toArray();
        return view('guest.productDetail',compact('data', 'product'));
    }
}
