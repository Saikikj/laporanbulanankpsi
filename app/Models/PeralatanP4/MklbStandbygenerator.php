<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MklbStandbygenerator extends Model
{
    use HasFactory;
    protected $table = 'mklb_standbygenerators';
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
