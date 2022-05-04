<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use Faker\Factory;


class Register extends BaseController
{
	protected $configs;
	
	public function __construct(){
		$this->configs = config('Blog');
	}
	
	public function index()
	{
		$faker = Factory::create();
		
		$data = [
//			'email' => 'uncorreo@email.com',
			'email' => $faker->email(),
			'password' => $faker->password(),
			'name' => $faker->name(),
			'surname' => $faker->lastname(),
			'id_country' => 12,
			'group' => 2,
		];
		
		$user = new User($data);
		$user->getUserName();
		$model = model('UsersModel');
		$model->withGroup($this->configs->defaultGroupUsers);
//		$model->withGroup('admin');
		$model->save($user);
		
		return view('Auth/register');
	}
	
	public function store()
	{
	
	}
}
