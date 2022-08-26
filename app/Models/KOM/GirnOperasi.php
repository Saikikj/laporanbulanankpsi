<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GirnOperasi extends Model
{
    use HasFactory;
    protected $table = 'girn_operasis';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'jumlahpegangan',
    'hilang',
    'rosak',
    'far',
    'sediaguna'
    ];
}
