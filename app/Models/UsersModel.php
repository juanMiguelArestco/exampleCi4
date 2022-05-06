<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

class UsersModel extends Model
{
	protected $table      = 'users';
	protected $primaryKey = 'id';
	
//	protected $useAutoIncrement = true;
	
	protected $returnType     = User::class;
	protected $useSoftDeletes = true;
	
	protected $allowedFields = [
		'username',
		'email',
		'password',
		'group',
	];
	
	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	
	protected $beforeInsert = ['addGroup'];
	protected $afterInsert = ['storeUserInfo'];
	
	protected function storeUserInfo($data){
		$this->infoUser->id_user = $data['id'];
		$modelInfo = model('UsersInfoModel');
		$modelInfo->insert($this->infoUser);
	}
	
	protected function addGroup($data){
		$data['data']['group'] = $this->assingGroup;
		return $data;
	}
	
	protected $assingGroup;
	protected $infoUser;
	
	public function withGroup(string $group)
	{
		$row = $this->db->table('groups')
			->where('name_group', $group)
			->get()->getFirstRow();
		
		if ($row != null){
			$this->assingGroup = $row->id_group;
		}
		
	}
	
	public function addInfoUser(UserInfo $ui)
	{
		$this->infoUser = $ui;
	}
	
	public function getUserBy(string $column, string $value)
	{
		return $this->where($column, $value)->first();
	}
}
