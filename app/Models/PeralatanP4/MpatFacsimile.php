<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpatFacsimile extends Model
{
    use HasFactory;
    protected $table = 'mpat_facsimiles';
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
