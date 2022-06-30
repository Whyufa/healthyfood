<?php
namespace App\Models;
use CodeIgniter\Model;
class AdminModel extends Model
{
protected $table = 'admin';
protected $primaryKey = 'id';
protected $allowedFields = [
'username', 'email', 'name',  'password', 
'created_date', 'created_by', 'updated_date', 'updated_by'
];
protected $returnType = 'App\Entities\Admin';
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