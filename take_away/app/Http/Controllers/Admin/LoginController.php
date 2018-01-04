<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class LoginController extends Controller
{
	//public $enableCsrfValidation=false;
	public function login()
	{
		return view('admin/login/login');
	}
}
?>