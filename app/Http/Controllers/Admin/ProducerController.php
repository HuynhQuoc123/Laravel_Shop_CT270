<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Producer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProducerController extends Controller
{
    public function showListProducer(){
        $data = Producer::all()->toArray();
        return view('admin.producer.Producer', compact('data'));
    }

    public function showAddProducer()
    {
        return view('admin.producer.addProducer');
    }

    public function addProducer(Request $request){
        $name = $request->producer_name;
        $producer = Producer::wherename($name)->first();

        if($name != null)
        {
            if(!$producer){
                $data = new Producer;
                $data->name = $name;
                $data->save();
            }
            else
            {
                return redirect('/admin/producer/add')->with('danger' ,'Tên nhà sản xuất đã tồn tại!');
            }
        }
        else
        {
            return redirect('/admin/producer/add')->with('danger' ,'Tên nhà sản xuất không được để trống!');
        }
        return redirect('/admin/producer')->with('sussces', 'Đã thêm nhà sản xuất thành công!');
    }

    public function deleteProducer(Request $request){
        $producer = Producer::find($request->id);
        $result = $producer->producer_product;
        
        foreach($result as $value){
            $product = Product::find($value->id);
            unlink("storage/images/". $product->image);
            $product->delete();
        }
        
        $producer->delete();
        return redirect('/admin/producer')->with('sussces', 'Đã xoá thành công!');
    }

    public function showEditProducer(Request $request)
    {
        $data = Producer::find($request->id)->toArray();
        return view('admin.producer.editProducer', compact('data'));
    }

    public function editProducer(Request $request){
        $data = Producer::find($request->id);
        $name =  $request->producer_name;
        $producer = Producer::wherename($name)->first();
        if($name != null)
        {
            if(!$producer)
            {
                $data->name = $name;
                $data->save();
            }
            else
            {
                return redirect()->back()->with('danger', 'Tên nhà sản xuất đã tồn tại!');
            }
        }
        else
        {
            return redirect()->back()->with('danger', 'Tên nhà sản xuất không được để trống!');
        }
        return redirect('/admin/producer')->with('sussces', 'Đã chỉnh sửa nhà sản xuất thành công!');
    }

}
