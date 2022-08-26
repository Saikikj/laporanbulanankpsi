<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla2PeralatanSokong extends Model
{
    use HasFactory;
    protected $table = 'mawilla2_peralatan_sokongs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'perjawatan',
    'notentera',
    'pangkat',
    'tred',
    'kategoriperalatan',
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
