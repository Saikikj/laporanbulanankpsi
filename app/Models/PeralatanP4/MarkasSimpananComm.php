<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkasSimpananComm extends Model
{
    use HasFactory;
    protected $table = 'markas_simpanan_comms';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'jenistelephone',
    'nosiri',
    'lokasi',
    'tahun',
    'status',
    'catatan'
    ];
}
