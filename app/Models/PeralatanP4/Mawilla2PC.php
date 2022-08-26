<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla2PC extends Model
{
    use HasFactory;
    protected $table = 'mawilla2_p_c_s';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'perjawatan',
    'notentera',
    'pangkat',
    'tred',
    'nama',
    'bilmonitor',
    'bilmouse',
    'bilkeyboard',
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
    'antivirus',
    'msoffice',
    'rujukankewpa',
    'catatan'
    ];
}
