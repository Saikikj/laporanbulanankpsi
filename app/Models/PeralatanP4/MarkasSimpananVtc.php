<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkasSimpananVtc extends Model
{
    use HasFactory;
    protected $table = 'markas_simpanan_vtcs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'model',
    'nosiricodec',
    'nosirimikrofon',
    'nosiricamera',
    'nosiriremote',
    'tahun',
    'status',
    'terminalnc2',
    'catatan'
    ];
}
