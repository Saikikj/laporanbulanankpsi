<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefon extends Model
{
    use HasFactory;

    protected $table = 'telefons';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'lokasi',
    'negerizon',
    'jumlahtalian',
    'taliansimpanan',
    'kata',
    'katb',
    'katc',
    'faks',
    'baik',
    'rosak',
    'catatan'
    ];
}
