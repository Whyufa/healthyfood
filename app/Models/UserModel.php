<?php
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
protected $table = 'user';
protected $primaryKey = 'id';
protected $allowedFields = [
'username', 'email', 'name',  'password', 
'created_date', 'created_by', 'updated_date', 'updated_by'
];
protected $returnType = 'App\Entities\User';
protected $useTimestamps = false;
public function findById($id)
{
$data = $this->find($id);
if ($data) {
return $data;
}
return false;
}
public function findByUsername($username)

{
$data = $this->where('username',$username)->findAll();
if ($data) {
return $data;
}
return false;
}
public function findByPass($pass)

{
$data = $this->where('password',md5($pass))->findAll();
if ($data) {
return $data;
}
return false;
}
}