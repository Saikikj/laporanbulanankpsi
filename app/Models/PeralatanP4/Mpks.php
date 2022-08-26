<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpks extends Model
{
    use HasFactory;
    protected $table = 'mpks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'perjawatan',
    'notentera',
    'pangkat',
    'tred',
    'nama',
    'lokasi',
    'bilcpu',
    'bilmonitor',
    'bilmouse',
    'bilkeyboard',
    'nosiricpu',
    'nosirimonitor',
    'jenama',
    'tahun',
    'status',
    'linep4',
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
