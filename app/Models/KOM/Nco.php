<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nco extends Model
{
    use HasFactory;
    protected $table = 'ncos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'kapalpangkalan',
    'nco',
    'baik',
    'rosak',
    'catatan'
    ];
}
