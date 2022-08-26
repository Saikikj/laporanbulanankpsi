<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mktl extends Model
{
    use HasFactory;
    protected $table = 'mktls';
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
    'rujukankewpa',
    'catatan'
    ];
}
