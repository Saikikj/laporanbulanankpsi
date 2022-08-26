<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemsCadangan extends Model
{
    use HasFactory;

    protected $table = 'dems_cadangans';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'unit',
    'lokasi',
    'catatan'
    ];
}
