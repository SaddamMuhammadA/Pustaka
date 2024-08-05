<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'pengarang', 'penerbit', 'jumlah_halaman', 'sampul'];
}