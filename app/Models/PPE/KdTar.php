<?php

namespace App\Models\PPE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KdTar extends Model
{
    use HasFactory;

    protected $table = 'kd_tars';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'peralatan',
    'model',
    'fungsi',
    'kuantiti',
    'status' ,
    'statuskeupayaan',
    'JMS',
    'Catatan'
    ];
}
