<?php

namespace App\Models\PeralatanP4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MktlVtc extends Model
{
    use HasFactory;
    protected $table = 'mktl_vtcs';
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
