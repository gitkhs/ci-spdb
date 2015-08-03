<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/common/Common".EXT);

class Main extends Common {
	function __construct()
	{
		parent::__construct();
		$this->site['layout']		= 'admin';
	}

	//
	// 함수 리맵핑: 
	public function _remap($method)
	{
 		if( method_exists($this, $method) ) {
			$this->{"{$method}"}();
		}
 		$this->load->view('admin', $this);
	}

	public function index()
	{
		$this->site['cover']	= true;
	}

	public function dashboard()
	{
	}
}
