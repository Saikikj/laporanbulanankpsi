<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla1Comm extends Model
{
    use HasFactory;
    protected $table = 'mawilla1_comms';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'jenistelephone',
    'nosiri',
    'tahun',
    'lokasi',
    'status',
    'catatan'
    ];
}
