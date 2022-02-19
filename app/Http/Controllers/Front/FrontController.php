<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller; 

use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    public function index(){
        $result['category']=DB::table('categories')
        ->where('status',1)
        ->where('is_home',1)
        ->get();

        foreach($result['category'] as $category){
            $result['product'][$category->id]=DB::table('products')
            ->leftjoin('shipping', 'shipping.product_id','products.id')
            ->leftjoin('discount', 'discount.product_id','products.id')
            
            ->where('status',1)
            ->where('category',$category->id)
            ->get();

            foreach($result['product'][$category->id] as $product){
                $result['product_varient'][$product->id]=DB::table('product_varients')
                ->where('status',1)
                ->where('product_id',$product->id)
                ->get();

            }
        

        }
        return view('front.index',['data'=>$result]);
    }
    
    
}
