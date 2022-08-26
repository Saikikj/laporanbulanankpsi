<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpab extends Model
{
    use HasFactory;
    protected $table = 'mpabs';
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
    'namauser',
    'processor',
    'ram',
    'operatingsystem',
    'msoffice',
    'antivirus',
    'rujukankewpa',
    'catatan'
    ];
}
