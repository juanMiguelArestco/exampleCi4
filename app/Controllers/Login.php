<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        echo 'aquí veras el form para login';
    }
	
	public function check()
	{
		echo 'aquí revisamos los datos que se buscan en la base';
		
		
	}
}
