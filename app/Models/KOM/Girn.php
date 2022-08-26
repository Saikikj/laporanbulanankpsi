<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girn extends Model
{
    use HasFactory;

    protected $table = 'girns';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'jenisterminal',
    'jumlahpegangan',
    'baik',
    'rosak',
    'teb',
    'hilang',
    'lupus',
    'catatan'
    ];
}
