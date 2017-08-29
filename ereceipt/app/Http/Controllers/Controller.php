<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
    	$product_name = $req->input('product_name');
    	$quantity = $req->input('quantity');
    	$price = $req->input('price');

    	$data =array('product_name'=>$product_name,'quantity'=>$quantity,'price'=>$price);

    	DB::table('items_for_purchase')->insert($data);

    	echo "success!";
    }
}
