<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class ProductController extends Controller
{
	//public $enableCsrfValidation=false;
	public function product_list()
	{
		return view('admin/product/product_list');
	}
	public function product_detail()
	{
		return view('admin/product/product_detail');
	}
	public function recycle_bin()
	{
		return view('admin/product/recycle_bin');
	}
}

?>