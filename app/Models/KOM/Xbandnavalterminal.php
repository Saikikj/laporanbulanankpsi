<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xbandnavalterminal extends Model
{
    use HasFactory;
    protected $table = 'xbandnavalterminals';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'penempatan',
    'lokasi',
    'jumlah',
    'catatan'
    ];
}
