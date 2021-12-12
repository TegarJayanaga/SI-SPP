<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table                = 'siswa';
    protected $primaryKey           = 'id_siswa';
    protected $allowedFields        = ['nama', 'nis', 'kelas', 'tagihan', 'status', 'cicil',];
}
