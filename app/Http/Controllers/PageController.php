<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

use Illuminate\Http\Request;




class PageController extends BaseController {
	
	public function page_about() 
	{
		$pagecontent = array(
			'view'	=> 'page-about',
			'pagename' => 'About Us'
		);
		return $this->render_view( $pagecontent );	
	}
	public function page_news() 
	{
		$pagecontent = array(
			'view' => 'page-news',
			'pagename' => 'News'
		);
		return $this->render_view( $pagecontent );	
	}
	public function page_fixtures() 
	{
		$pagecontent = array(
			'view' => 'page-fixtures',
			'pagename' => 'Fixtures'
		);
		return $this->render_view( $pagecontent );	
	}
	public function page_results() 
	{
		$pagecontent = array(
			'view' => 'page-results',
			'pagename' => 'Results'
		);
		return $this->render_view( $pagecontent );	
	}
}
