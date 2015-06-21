<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseController extends Controller {

	public function index()
	{
		$pagecontent = array(
			'view' => 'homepage',
			'pagename' => 'Home'
		);
		return $this->render_view( $pagecontent );	
	}
	public function render_view( $data )
	{
		return view( $data['view'] , $data );
	}

}
