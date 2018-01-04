<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
* 
*/
class PictureController extends Controller
{
	public function adver()
	{
		return view('admin/picture/adver');
	}
	public function clas()
	{
		return view('admin/picture/clas');
	}
	public function clas_detail()
	{
		return view('admin/picture/clas_detail');
	}
	public function adver_detail()
	{
		return view('admin/picture/adver_detail');
	}
}
?>