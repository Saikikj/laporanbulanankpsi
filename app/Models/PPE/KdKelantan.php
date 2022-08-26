<?php

namespace App\Models\PPE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KdKelantan extends Model
{
    use HasFactory;

    protected $table = 'kd_kelantans';
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
