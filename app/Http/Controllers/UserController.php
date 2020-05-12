<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class UserController extends Controllers{
	public function store(request $request)
	{
		print_r($request->input());
	}
}
?>
