<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function add_product(){

        return view('backend.pages.add_product');
    }

  public  function store_product(Request $request){



        $this->validate($request,[
            'product_name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        DB::table('products')->insert([
            'product_name'=> $request->product_name,
            'quantity' => $request->quantity,
            'price'=> $request->price
        ]);

        $notification = array(
            'message' => 'Product add  Successfully',
            'alert-type' => 'info'
        );

 return redirect()->back()->with($notification);
}

public function all_product(){
    $productsData= DB::table('products')->get();
    return view('backend.pages.product_list',compact('productsData'));
}


 public function edit_product($id){
    $products = DB::table('products')->where('id',$id)->first();
    return view('backend.pages.edit_product', compact('products'));

}

public function update_product(Request $request){
    $product_id = $request->id;
    DB::table('products')->where('id', $product_id)
        ->update([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

    return redirect()->back();
}


public function delete_product($id)
{
    DB::table('products')->where('id',$id)->delete();;

    $notification = array(
        'message' => 'Product Deleted Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
}

}
