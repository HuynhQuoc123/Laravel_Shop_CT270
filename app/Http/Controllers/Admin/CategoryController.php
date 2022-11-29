<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function showListCategory()
    {
        // $result['info'] = DB::table('categories')->get()->toArray();
        $data = Category::all()->toArray();
        return view('admin.category.Category', compact('data'));        
    }

  
    public function showAddCategory()
    {
        return view('admin.category.addCategory');
    }

    public function addCategory(Request $request){
        $name = $request->category_name;
        $category = Category::wherename($name)->first();

        if($name != null)
        {
            if(!$category){
                $data = new Category;
                $data->name = $name;
                $data->save();
            }
            else
            {
                return redirect('/admin/category/add')->with('danger' ,'Tên danh mục đã tồn tại!');
            }
        }
        else
        {
            return redirect('/admin/category/add')->with('danger' ,'Tên danh mục không được để trống!');
        }
        return redirect('/admin/category')->with('sussces', 'Đã thêm danh mục thành công!');
    }

    public function deleteCategory(Request $request){
        $category = Category::find($request->id);
        $result = $category->product;
        
        foreach($result as $value){
            $product = Product::find($value->id);
            unlink("storage/images/". $product->image);
            $product->delete();
        }
        
        $category->delete();
        return redirect('/admin/category')->with('sussces', 'Đã xoá thành công!');
    }

    public function showEditCategory(Request $request)
    {
        $data = Category::find($request->id)->toArray();
        return view('admin.category.editCategory', compact('data'));
    }

    public function editCategory(Request $request){
        $data = Category::find($request->id);
        $name =  $request->category_name;
        $category = Category::wherename($name)->first();
        if($name != null)
        {
            if(!$category)
            {
                $data->name = $name;
                $data->save();
            }
            else
            {
                return redirect()->back()->with('danger', 'Tên danh mục đã tồn tại!');
            }
        }
        else
        {
            return redirect()->back()->with('danger', 'Tên danh mục không được để trống!');
        }
        return redirect('/admin/category')->with('sussces', 'Đã chỉnh sửa danh mục thành công!');
    }

  
}
