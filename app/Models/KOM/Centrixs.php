<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centrixs extends Model
{
    use HasFactory;
    protected $table = 'centrixs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'markas',
    'fitted',
    'flywaykit',
    'status',
    'catatan'
    ];
}
