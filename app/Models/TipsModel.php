<?php
namespace App\Models;
use CodeIgniter\Model;
class TipsModel extends Model
{
protected $table = 'tips';
protected $primaryKey = 'id';
protected $allowedFields = [
'judul', 'link',  
'created_date', 'created_by', 'updated_date', 'updated_by'
];
protected $returnType = 'App\Entities\Tips';
protected $useTimestamps = false;
public function findById($id)
{
$data = $this->find($id);
if ($data) {
return $data;
}
return false;
}
public function findByJudul($judul)
{
$data = $this->where('judul',$judul)->findAll();
if ($data) {
return $data;
}
return false;
}
}