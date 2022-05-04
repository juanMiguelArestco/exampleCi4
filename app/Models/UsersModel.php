<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;

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
	
	protected function addGroup($data){
		$data['data']['group'] = $this->assingGroup;
		return $data;
	}
	
	protected $assingGroup;
	
	public function withGroup(string $group)
	{
		$row = $this->db->table('groups')
			->where('name_group', $group)
			->get()->getFirstRow();
		
		if ($row != null){
			$this->assingGroup = $row->id_group;
		}
		
	}
	
}
