<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mkpl extends Model
{
    use HasFactory;
    protected $table = 'mkpls';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'perjawatan',
    'notentera',
    'pangkat',
    'tred',
    'nama',
    'bilcpu',
    'bilmonitor',
    'bilmouse',
    'bilkeyboard',
    'nosiricpu',
    'nosirimonitor',
    'jenama',
    'tahun',
    'status',
    'p4',
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
