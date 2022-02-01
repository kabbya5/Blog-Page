<?php

namespace App\Http\Controllers\admin;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Icon;

class NavbarController extends Controller
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
            'img' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $input = $request->all();
        if($img = $request->file('img')){
            $img_name = date('YmdHis').".".$img->getClientOriginalExtension();
            $destinationPath = public_path() .'/media/icons/';
            $img->move($destinationPath,$img_name);
            $input['img'] = 'media/icons'.$img_name;
        }
        Icon::create($input);
        return back();
    }
}
