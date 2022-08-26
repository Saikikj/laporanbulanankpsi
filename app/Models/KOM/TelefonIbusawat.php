<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonIbusawat extends Model
{
    use HasFactory;
    protected $table = 'telefon_ibusawats';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'zon',
    'pasukanmarkas',
    'taliansimpanan',
    'negeri',
    'ibusawat',
    'console',
    'catatan'
    ];
}
