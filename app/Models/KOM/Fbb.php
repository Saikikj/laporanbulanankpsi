<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fbb extends Model
{
    use HasFactory;

    protected $table = 'fbbs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'markasunit',
    'penempatan',
    'jumlahpeganganterminal',
    'statuspengoperasian',
    'catatan'
    ];
}
