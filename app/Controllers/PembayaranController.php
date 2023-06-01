<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Penjualan;


class PembayaranController extends ResourceController
{
    function __construct() {
        $this->pembayaran = new pembayaran();
        $this->marketing = new marketing();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['title'] = "Pembayar";
        $data['jual'] = $this->penjualan->getAll();
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
