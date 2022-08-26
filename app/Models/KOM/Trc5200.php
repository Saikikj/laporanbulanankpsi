<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trc5200 extends Model
{
    use HasFactory;
    protected $table = 'trc5200s';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'namakapalunit',
    'penempatan',
    'bft',
    'handheld',
    'catatan'
    ];

}
