<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C4itacxKapal extends Model
{
    use HasFactory;
    protected $table = 'c4itacx_kapals';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'kapal',
    'penempatan',
    'c4itacx',
    'baik',
    'rosak',
    'catatan'
    ];
}
