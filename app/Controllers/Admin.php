<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Admin extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $modelName = 'App\Models\AdminModel';
    protected $format = 'json';
    public function __construct()
{
$this->validation = \Config\Services::validation();
}
    public function index()
    {
        return $this->respond($this->model->findAll());  //
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($value = null)
    {
        $data = $this->model->findById($value);
        $username= $this->model->findByUsername($value);
        $pass = $this->model->findByPass($value);
        if ($data) {
            return $this->respond($data);
        }
        elseif($username){
            return $this->respond($username);
        }
        elseif($pass){
            return $this->respond($pass);
        }
        return $this->fail('data tidak ditemukan');
        
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
