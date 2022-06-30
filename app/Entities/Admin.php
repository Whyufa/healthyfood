<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;
class Admin extends Entity
{
public function setPassword(string $pass)
{

$this->attributes['password'] = md5($pass);
return $this;
}
}