<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpatLaptop extends Model
{
    use HasFactory;
    protected $table = 'mpat_laptops';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'perjawatan',
    'notentera',
    'pangkat',
    'tred',
    'nama',
    'nosiri',
    'jenama',
    'tahun',
    'sistem',
    'status',
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
