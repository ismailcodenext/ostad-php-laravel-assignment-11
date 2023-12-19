<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SalesController extends Controller
{
    public function add_sales(){
        $productsData = DB::table('products')->get();
        return view('backend.pages.sales_product', compact('productsData'));
    }

    public function store_sales(Request $request){
        $productId = $request->product_id;
        $quantity = $request->quantity;

        $product = DB::table('products')->where('id', $productId)->first();

        if ($product && $product->quantity >= $quantity) {
            // Create a new sale record
            DB::table('sales')->insert([
                'product_id' => $productId,
                'quantity' => $quantity,
                'total_price' => $quantity * $product->price,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::table('products')->where('id', $productId)->decrement('quantity', $quantity);
            $notification = array(
                'message' => 'Product sold successfully.',
                'alert-type' => 'success'
            );
            return redirect()->route('product.all_product')->with($notification);
        }

        return redirect()->route('product.all_product')->with('error');
    }


    public function all_sales_transaction(){
        $sales_data = DB::table('sales')
        ->join('products', 'sales.product_id', '=', 'products.id')
        ->select('sales.*', 'products.product_name')
        ->get();

        return view('backend.pages.sales_transaction',compact('sales_data'));
    }



    public function delete_transaction($id){
        DB::table('sales')->where('id',$id)->delete();;


    }

    public function sales_dashboard()
    {
        $todayTotalSales = DB::table('sales')
            ->whereDate('created_at', Carbon::today())
            ->sum('total_price');

        $yesterdayTotalSales = DB::table('sales')
            ->whereDate('created_at', Carbon::yesterday())
            ->sum('total_price');

        $thisMonthTotalSales = DB::table('sales')
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('total_price');

        $lastMonthTotalSales = DB::table('sales')
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->sum('total_price');

        return view('backend.pages.sales_transaction_dashbord', compact('todayTotalSales','yesterdayTotalSales','thisMonthTotalSales','lastMonthTotalSales'));
    }

    }

