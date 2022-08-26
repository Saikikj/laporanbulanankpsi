<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MklbFacsimile extends Model
{
    use HasFactory;
    protected $table = 'mklb_facsimiles';
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
    'rujukankewpa',
    'catatan'
    ];
}
