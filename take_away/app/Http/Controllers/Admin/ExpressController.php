<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class ExpressController extends Controller
{
	//public $enableCsrfValidation=false;
	public function express_list()
	{
		return view('admin/express/express_list');
	}
	public function pay_list()
	{
		return view('admin/express/pay_list');
	}
}
?>