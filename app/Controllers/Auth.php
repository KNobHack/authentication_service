<?php

namespace App\Controllers;

class Auth extends BaseController 
{

	// protected $modelName = 'App\Models\Photos';

	public function index()
	{
		$data = ['status' => 'up', 'msg' => 'server is up'];
		return $this->respond($data);
	}

	public function create()
	{
		# code...
	}

	public function store()
	{
		# code...
	}
}
