<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
class PageController extends Controller
{
    public function getIndex(){
        $slide= Slide::all();
        $newProduct=Product::where('new',1)->paginate(8);
        return view('page.trang-chu',compact('slide','newProduct'));
    }
    public function getLoaisanpham(){
        return view('page.loai-sanpham');
    }
    public function getChitiet($id){
        info($id);
        $chitiet=Product::where('id',$id)->get();
        return view('page.chitiet-sanpham',compact('chitiet'));
    }
    public function getLienhe(){
        return view('page.lienhe');
    }
    public function getGioithieu(){
        return view('page.gioithieu');
    }
}
