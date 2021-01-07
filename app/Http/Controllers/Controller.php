<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use App\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    

     
      public function index()
  {

         $products = Product::get();
           
        return view('index', compact('products'));
    }



    public function delete(Request $request){

        $user = User::find($request -> id);   // Offer::where('id','$offer_id') -> first();

       

        $user->delete();

        return response()->json([
            'status' => true,
            'msg' => 'تم الحذف بنجاح',
            'id' =>  $request -> id
        ]);

    }
}
