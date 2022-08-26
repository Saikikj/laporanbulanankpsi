<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpksTelephone extends Model
{
    use HasFactory;
    protected $table = 'mpks_telephones';
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
    'tahun',
    'status',
    'rujukankewpa',
    'catatan'
    ];
}
