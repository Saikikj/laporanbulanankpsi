<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla3PC extends Model
{
    use HasFactory;
    protected $table = 'mawilla3_p_c_s';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'lokasi',
    'perjawatan',
    'nosiricpu',
    'nosirimonitor',
    'jenama',
    'tahun',
    'status',
    'terminalnc2',
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
