<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mawilla3Vtc extends Model
{
    use HasFactory;
    protected $table = 'mawilla3_vtcs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'model',
    'nosiricodec',
    'nosirimikrofon',
    'nosiricamera',
    'nosiriremote',
    'poweradapter',
    'tahun',
    'status',
    'terminalnc2',
    'catatan'
    ];
}
