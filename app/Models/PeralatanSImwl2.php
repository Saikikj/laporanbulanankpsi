<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeralatanSImwl2 extends Model
{
    use HasFactory;
    protected $table = 'peralatan_s_imwl2s';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'markas',
    'unit',
    'penempatan',
    'jenisperalatan',
    'jenama' ,
    'cpu',
    'monitor',
    'tahun',
    'nopendaftaranasetkewpa',
    'status',
    'cadangan',
    'catatan'
    ];
}
