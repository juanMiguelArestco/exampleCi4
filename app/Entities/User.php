<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity{
	protected $dates = ['created_at', 'updated_at'];

	protected function setPassword(string $password){
		$this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);
	}
	
	public function getUserName(){
		return $this->attributes['username'] = explode(' ', $this->name)[0].explode(' ', $this->surname)[0];
	}
	
	
	
}

