<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xbandcotp extends Model
{
    use HasFactory;
    protected $table = 'xbandcotps';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'penempatan',
    'lokasi',
    'jumlah',
    'catatan'
    ];
}
