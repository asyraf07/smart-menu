<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table      = 'Pesanan';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes = false;
    protected $useTimestamps = false;

    protected $allowedFields = ['id_meja', 'id_menu', 'quantity', 'harga', 'status'];


    public function getPesananAll()
    {

        return $this->db->table('Pesanan')
            ->select('Pesanan.id, Meja.username, Meja.no_meja, Pesanan.quantity, Pesanan.harga, Menu.nama')
            ->join('Meja', 'Meja.id=Pesanan.id_meja')
            ->join('Menu', 'Menu.id=Pesanan.id_menu')
            ->get()->getResultArray();
    }

    public function getPesananStatus($status)
    {

        return $this->db->table('Pesanan')
            ->select('Pesanan.id, Meja.username, Meja.no_meja, Pesanan.quantity, Pesanan.harga, Menu.nama')
            ->join('Meja', 'Meja.id=Pesanan.id_meja')
            ->join('Menu', 'Menu.id=Pesanan.id_menu')
            ->where('status', $status)
            ->get()->getResultArray();
    }

    public function getPesanan($id, $status)
    {

        return $this->db->table('Pesanan')
            ->select('Pesanan.id, Meja.username, Meja.no_meja, Pesanan.quantity, Pesanan.harga, Menu.nama')
            ->join('Meja', 'Meja.id=Pesanan.id_meja')
            ->join('Menu', 'Menu.id=Pesanan.id_menu')
            ->where('Meja.id ', $id)
            ->where('status', $status)
            ->get()->getResultArray();
    }

    public function getTotalHargaAll()
    {
        return $this->db->table('Pesanan')
            ->select('Meja.no_meja, SUM(Pesanan.harga) AS total_harga')
            ->join('Meja', 'Meja.id=Pesanan.id_meja')
            // ->where('Meja.id', $id_meja)
            ->groupBy('no_meja')
            ->get()->getResultArray();
    }

    public function getTotalHargaByIdMeja($id_meja)
    {
        $arr = $this->db->table('Pesanan')
            ->select('SUM(Pesanan.harga) AS total_harga')
            ->join('Meja', 'Meja.id=Pesanan.id_meja')
            ->where('Meja.id', $id_meja)
            ->groupBy('no_meja')
            ->get()->getResultArray();

        if (count($arr) > 0) {
            return (int)$arr[0]['total_harga'];
        }
        return -1;
    }
}
