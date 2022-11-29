<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function showListProduct(Request $request)
    {
        $data = Product::paginate(5);   
        if($request->idCat && $request->idCat != -1){

            $data = Category::find($request->idCat)->product()->paginate(5);
        }

        return view('admin.product.Product', compact('data'));        
    }
    public function showAddProduct()
    {     
        $category = Category::all()->toArray();
        if($category == null){
            return redirect('category')->with('danger', 'Vui lòng thêm danh mục trước khi thêm sản phẩm!');
        } 
        else
        {
            return view('admin.product.addProduct');
        }
    }
    public function addProduct(Request $request)
    {
        $idCat = $request->product_category;
        $idProducer =$request->producer;
        $name = $request->product_name;
        $price =$request->product_price;
        if($name == null)
        {
            return redirect('/admin/product/add')->with('danger' ,'Tên sản phẩm không được rỗng!');

        }
        if($price == null)
        {
            return redirect('/admin/product/add')->with('danger' ,'Giá sản phẩm không được rỗng!');

        }    
        if($request->has('product_image'))
        {
            $file = $request->product_image;
            $image = $file->getClientOriginalName();
            $file->move('storage/images', $image);
        }else{
            return redirect('/admin/product/add')->with('danger' ,'Hình ảnh sản phẩm không được rỗng!');

        }
          
        $product = new Product();
        $product->id_category = $idCat;
        $product->id_producer = $idProducer;
        $product->name = $name;
        $product->price = $price;
        $product->image = $image;
        $product->save();

        return redirect('/admin/product')->with('sussces', 'Đã thêm sản phẩm thành công!');

    }

    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        unlink("storage/images/". $product->image);
        $product->delete();
        return redirect('/admin/product')->with('sussces', 'Đã xoá thành công!');
    }

    public function showEditProduct(Request $request)
    {
        $data = Product::find($request->id)->toArray();   
        return view('admin.product.editProduct', compact('data')); 
    }

    public function editProduct(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        if($request->has('product_image'))
        {
            unlink("storage/images/". $product->image);
            $file = $request->product_image;
            $image = $file->getClientOriginalName();
            $file->move('storage/images', $image);
            $product->image = $image;
        }
        $product->save(); 
        return redirect('/admin/product');

    }
    //Images
    public function showAddGalleryImage(Request $request)
    {
        $product = Product::find($request->id)->toArray();
        $images =Product::find($request->id)->product_image->toArray();
        return view('admin.product.addGalleryImage', compact('product','images')); 
    }

    public function addGalleryImage(Request $request)
    {
        $idProduct = $request->product_id;
        $x= Image::where('id_product',$idProduct)->count();
        // dd($x);
        if($x >= 3){
            return redirect()->back()->with('danger' ,'Số lượng ảnh chi tiết tối đa là 3');
        }
        else{
            if($request->has('product_image')){
                $file = $request->product_image;
                $imageName = $file->getClientOriginalName();
                $file->move('storage/images', $imageName);
                $image = new Image();
                $image->id_product = $idProduct;
                $image->image = $imageName;
                $image->save();
            }else{
                return redirect()->back()->with('danger' ,'Hình ảnh chi tiết không được rỗng!');    
            }
            return redirect()->back()->with('sussces', 'Đã thêm thành công!');
        }        
    }

    public function deleteImage(Request $request)
    {
        $image = Image::find($request->id);
        unlink("storage/images/". $image->image);
        $image->delete();
        return  redirect()->back()->with('sussces', 'Đã xoá thành công!');
    }
}
