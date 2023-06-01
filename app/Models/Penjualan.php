<?php

namespace App\Models;

use CodeIgniter\Model;

class Penjualan extends Model
{
    protected $table            = 'tabel_penjualan';
    protected $primaryKey       = 'id_penjualan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_marketing','transaction_number','date','cargo_fee','total_balance','grand_total'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


     function getAll()
        {
            $builder = $this->db->table('tabel_penjualan');
            $builder->join('tabel_marketing', 'tabel_marketing.id_marketing = tabel_penjualan.id_marketing');
            $query  = $builder->get();
            return $query->getResult();

        }





}
