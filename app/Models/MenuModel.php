<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table      = 'Menu';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes = false;
    protected $useTimestamps = false;

    protected $allowedFields = ['nama', 'keterangan', 'kategori', 'harga', 'stok', 'gambar'];

    public function beli($id)
    {
        $item = $this->find($id);
        $data = [
            'stok' => ($item['stok'] - 1),
        ];
        $this->update($id, $data);
    }
}
