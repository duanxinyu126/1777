<?php 
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class HomeController extends Controller
{
	//public $enableCsrfValidation=false;
	public function index()
	{
		return view('home/index');
	}
	public function add(Request $request)
	{
		$uname = $request->all();
		print_r($uname);
	}
}
?>