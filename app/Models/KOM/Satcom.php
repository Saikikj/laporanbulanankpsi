<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satcom extends Model
{
    use HasFactory;
    protected $table = 'satcoms';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'rangkaian',
    'jumlahpeganganterminal',
    'baik',
    'rosak',
    'catatan'
    ];
}
