<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla1Laptop extends Model
{
    use HasFactory;
    protected $table = 'mawilla1_laptops';
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
    'status',
    'sistem',
    'namauser',
    'processor',
    'ram',
    'operatingsystem',
    'msoffice',
    'rujukankewpa',
    'catatan'
    ];
}
