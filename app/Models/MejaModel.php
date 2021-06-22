<?php

namespace App\Models;

use CodeIgniter\Model;

class MejaModel extends Model
{
    protected $table      = 'Meja';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes = false;
    protected $useTimestamps = false;

    protected $allowedFields = ['username'];
}
