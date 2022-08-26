<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentrixsRekod extends Model
{
    use HasFactory;
    protected $table = 'centrixs_rekods';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'bulan',
    'penggunaan',
    'mula',
    'tamat',
    'catatan'
    ];
}
