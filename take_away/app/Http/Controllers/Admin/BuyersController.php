<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class BuyersController extends Controller
{
	//public $enableCsrfValidation=false;
	public function consumption()
	{
		return view('admin/buyers/consumption');
	}
	public function evaluate()
	{
		return view('admin/buyers/evaluate');
	}
	public function message()
	{
		return view('admin/buyers/message');
	}
}
?>