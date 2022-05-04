<?php

namespace App\Models;

//use App\Entities\UserInfo;
use CodeIgniter\Model;

class UsersInfoModel extends Model
{
    protected $table            = 'users_info';
    protected $primaryKey       = 'id_user';
    
	protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    
    protected $allowedFields    = ['id_user', 'name', 'surname', 'id_country'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
