<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla1Switchrouter extends Model
{
    use HasFactory;
    protected $table = 'mawilla1_switchrouters';
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
