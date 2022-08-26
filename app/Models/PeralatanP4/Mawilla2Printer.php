<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla2Printer extends Model
{
    use HasFactory;
    protected $table = 'mawilla2_printers';
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
    'nosiri',
    'jenama',
    'toner',
    'tahun',
    'status',
    'rujukankewpa',
    'catatan'
    ];
}
