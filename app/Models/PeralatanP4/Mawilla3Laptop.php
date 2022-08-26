<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla3Laptop extends Model
{
    use HasFactory;
    protected $table = 'mawilla3_laptops';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'lokasi',
    'notentera',
    'pangkat',
    'tred',
    'nama',
    'nosiri',
    'jenama',
    'tahun',
    'status',
    'namadaftar',
    'processor',
    'ram',
    'operatingsystem',
    'msoffice',
    'antivirus',
    'rujukankewpa',
    'catatan'
    ];
}
