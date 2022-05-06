<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
		if (!session()->is_logged){
			return view('Auth/login');
		}
		
		return redirect()->route('posts');
    
    }
	
	public function signin()
	{
		if(!$this->validate([
			'email' => 'required|valid_email',
			'password' => 'required',
		])){
			return redirect()->back()
				->with('errors', $this->validator->getErrors())
				->withInput();
		}
		$email = trim($this->request->getVar('email'));
		$password = trim($this->request->getVar('password'));
		
		$model = model('UsersModel');
		if(!$user = $model->getUserBy('email', $email)){
			return redirect()->back()->with('msg',[
				'type' => 'warning',
				'title' => 'Atención',
				'body' => 'Este usuario no se encuentra registrado!',
			]);
		}
		
		if(!password_verify($password, $user->password)){
			return redirect()->back()->with('msg',[
				'type' => 'danger',
				'title' => 'Error',
				'body' => 'Algo anda mal con ese password!',
			]);
		}
		session()->set([
			'id_user' => $user->id,
			'email' => $user->email,
			'username' => $user->username,
			'is_logged' => true
		]);
		
		return redirect()->route('posts')->with('msg', [
			'type' => 'success',
			'title' => 'Bienvenido',
			'body' => 'Todo listo, iniciemos!',
		]);
		
		
	}
	
	public function signout()
	{
		session()->destroy();
		return redirect()->route('login');
	}
}
