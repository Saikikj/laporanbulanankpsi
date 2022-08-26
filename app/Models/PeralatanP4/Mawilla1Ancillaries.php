<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla1Ancillaries extends Model
{
    use HasFactory;
    protected $table = 'mawilla1_ancillaries';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'nosiri',
    'tahun',
    'lokasi',
    'status',
    'catatan'
    ];
}
