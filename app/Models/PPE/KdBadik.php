<?php

namespace App\Models\PPE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KdBadik extends Model
{
    use HasFactory;

    protected $table = 'kd_badiks';
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
