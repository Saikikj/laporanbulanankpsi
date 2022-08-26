<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla3Ancillaries extends Model
{
    use HasFactory;
    protected $table = 'mawilla3_ancillaries';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'nosiri',
    'lokasi',
    'tahun',
    'status',
    'rujukankewpa',
    'catatan'
    ];
}
