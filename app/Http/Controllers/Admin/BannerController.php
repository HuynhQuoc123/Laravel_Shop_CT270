<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    //
    public function showListBanner()
    {
        $data = Banner::all()->toArray();
        return view('admin.banner.Banner', compact('data'));        
    }

    public function showEditBanner(Request $request)
    {
        $data = Banner::find($request->id)->toArray();   
        return view('admin.banner.editBanner', compact('data'));
    }

    public function editBanner(Request $request)
    {
        $banner = Banner::find($request->banner_id);
        if($request->has('banner_image'))
        {
            $file = $request->banner_image;
            $image = $file->getClientOriginalName();
            $file->move('storage/images', $image);
            $banner->image = $image;
            $banner->save(); 
        }
        return redirect('/admin/banner');

    }
}
