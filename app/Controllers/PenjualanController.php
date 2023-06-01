<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Penjualan;
use App\Models\Marketing;


class PenjualanController extends ResourceController
{
    function __construct() {
        $this->penjualan = new penjualan();
        $this->marketing = new marketing();

    }
    
    public function index()
    {
        $data['title'] = "Penjualan";
        $data['jual'] = $this->penjualan->findAll();
        $data['mar'] = $this->marketing->findAll();
        echo view('layouts/header', $data);
        echo view('layouts/navbar', $data);
        echo view('penjualan/index', $data);
        echo view('layouts/footer');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
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
        // memperoses tambah data file new

        $data = $this->request->getPost();
        $this->penjualan->insert($data);
        return redirect()->to(base_url('penjualan'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
         $data = $this->request->getPost();
        $this->penjualan->update($id, $data);
        return redirect()->to(base_url('penjualan'))->with('success', 'Data Berhasil Diupdate');
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
        $this->penjualan->where('id_penjualan',$id)->delete();
        return redirect()->to(base_url('penjualan'))->with('success', 'Data Berhasil Dihapus');
    }
}
