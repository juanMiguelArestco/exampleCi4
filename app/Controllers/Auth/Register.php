<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Entities\UserInfo;
use Faker\Factory;


class Register extends BaseController
{
	protected $configs;
	
	public function __construct(){
		$this->configs = config('Blog');
	}
	
	public function index()
	{
		$model = model('CountriesModel');
		return view('Auth/register', ['countries' => $model->findAll()]);
	}
	
	public function store()
	{
		$faker = Factory::create();
		$data = [
//			'email' => 'uncorreo@email.com',
			'email' => $faker->email(),
			'password' => $faker->password(),
			'name' => $faker->name(),
			'surname' => $faker->lastname(),
			'id_country' => $faker->numberBetween(1, 15),
			'group' => $faker->numberBetween(1, 2),
		];
		$user = new User($data);
		$user->getUserName();
		
		$model = model('UsersModel');
		//		$model->withGroup('admin');
		$model->withGroup($this->configs->defaultGroupUsers);
		
		$userInfo = new UserInfo($data);
		$model->addInfoUser($userInfo);
		
		//d($user);
		$model->save($user);
		
		return view('Auth/_');
	}
}
