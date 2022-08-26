<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkasSimpananAncillaries extends Model
{
    use HasFactory;
    protected $table = 'markas_simpanan_ancillaries';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'nosiri',
    'lokasi',
    'tahun',
    'status',
    'catatan'
    ];
}
