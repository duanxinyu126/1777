<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class UserController extends Controller
{
	public function user_list()
	{
		return view('admin/user/user_list');
	}
	public function user_detail()
	{
		return view('admin/user/user_detail');
	}
	public function user_update()
	{
		return view('admin/user/user_update');
	}
}