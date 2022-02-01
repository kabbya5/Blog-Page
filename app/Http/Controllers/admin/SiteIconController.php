<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Icon;

class SiteIconController extends Controller
{
    public function index(){
        $icons = Icon::all();
        return view('admin.site_icon.index',compact('icons'));
    }

    public function create(){
        $icon = new Icon();
        return view('admin.site_icon.create',compact('icon'));
    }
    public function store(Request $request){
        $request->validate([
            'url' => 'required',
            'name' => 'required|min:3|max:100',
            'img' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $input = $request->all();
        if($img = $request->file('img')){
            $img_name = date('YmdHis').".".$img->getClientOriginalExtension();
            $destinationPath = public_path() .'/media/icons/';
            $img->move($destinationPath,$img_name);
            $input['img'] = 'media/icons/'.$img_name;
        }

        Icon::create($input);
        return back();
    }
    public function edit(Icon $icon){
        return view('admin.site_icon.edit', compact('icon'));
    }
    public function update(Request $request, Icon $icon){
        $request->validate([
            'url' => 'required',
            'img' => '|image|mimes:jpeg,png,jpg',
        ]);
        $old_img = $request->old_img;
        if($img = $request->file('img')){
            unlink($old_img);
            $img_name = date('YmdHis').".".$img->getClientOriginalExtension();
            $destinationPath = public_path() .'/media/icons/';
            $img->move($destinationPath,$img_name);
            $icon->update([
                'img'=> 'media/icons/'.$img_name
            ]);
        }else{
            $icon->update($request->only(['name','url']));
        }       
        return back();
    }
    public function delete(Request $request,Icon $icon){
        $old_img = $request->old_img;
        if($old_img){
            unlink($old_img);
        }
        $icon->delete();
        return back();
    }
}
