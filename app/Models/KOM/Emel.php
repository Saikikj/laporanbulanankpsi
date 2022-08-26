<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emel extends Model
{
    use HasFactory;
    protected $table = 'emels';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'lokasi',
    'sever',
    'catatan'
    ];
}
