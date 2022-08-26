<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla1 extends Model
{
    use HasFactory;
    protected $table = 'mawilla1s';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
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
    'catatan'
    ];
}
