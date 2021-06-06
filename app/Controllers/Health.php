<?php

namespace App\Controllers;

class Health extends BaseController
{
	
	// protected $modelName = 'App\Models\Photos';

	public function index()
	{
		return $this->respond(['status' => 'up', 'msg' => 'server is up']);
	}
}
