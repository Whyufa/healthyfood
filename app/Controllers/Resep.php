<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Resep extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $modelName = 'App\Models\ResepModel';
    protected $format = 'json';
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        return $this->respond($this->model->findAll());//
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($value = null)
    {
        $data = $this->model->findById($value);
        $judul= $this->model->findByJudul($value);
        
        if ($data) {
            return $this->respond($data);
        }
        elseif($judul){
            return $this->respond($judul);
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
        $data = $this->request->getPost();
        $validate = $this->validation->run($data, 'resep');
        $errors = $this->validation->getErrors();
        if ($errors) {
            return $this->fail($errors);
        }
        $user = new \App\Entities\Resep();
        $user->fill($data);
        $user->created_by = 0;
        $user->created_date = date("Y-m-d H:i:s");
        if ($this->model->save($user)) {
            return $this->respondCreated($user, 'Resep berhasil ditambahkan');
        }
    }
    
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        $validate = $this->validation->run($data, 'resep');
        $errors = $this->validation->getErrors();
        if ($errors) {
            return $this->fail($errors);
        }
        if (!$this->model->findById($id)) {
            return $this->fail('id tidak ditemukan');
        }
        $user = new \App\Entities\Resep();
        $user->fill($data);
        $user->updated_by = 0;
        $user->updated_date = date("Y-m-d H:i:s");
        if ($this->model->save($user)) {
            return $this->respondUpdated($user, 'user di updated');
        }
    }
    
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('id tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id . ' Deleted']);
    }
    }
}
