<?php
namespace App\Models;
use CodeIgniter\Model;
class ResepModel extends Model
{
protected $table = 'resep';
protected $primaryKey = 'id';
protected $allowedFields = [
'judul', 'bahan', 'cara',  'image', 
'created_date', 'created_by', 'updated_date', 'updated_by'
];
protected $returnType = 'App\Entities\Resep';
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