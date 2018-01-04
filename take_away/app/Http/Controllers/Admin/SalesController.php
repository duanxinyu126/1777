<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class SalesController extends Controller
{
	//public $enableCsrfValidation=false;
	public function sales_volume()
	{
		return view('admin/sales/sales_volume');
	}
}
?>