<?php

namespace App\Http\Controllers;
use App\Jobs\SendMessage;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function show(){
        $show=Product::all();
        return view('show',compact('show'));
    }

    public function insert(){
        $add=new Product();
        $add->name=Input::get('name') ;
        $add->save();
        return redirect()->back();
    }
    public function edit($id){
        $edit=Product::find($id);
        $edit->name=Input::get('name');
        $edit->save();
        return redirect()->back();
    }
    public function delete($id){
        $edit=Product::find($id)->delete();
        return redirect()->back();
    }

    public function send(){
        SendMessage::dispatch("Message send")->delay(now()->addMinutes(1));
    }
}
