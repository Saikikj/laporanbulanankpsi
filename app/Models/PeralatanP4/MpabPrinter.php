<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpabPrinter extends Model
{
    use HasFactory;
    protected $table = 'mpab_printers';
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
