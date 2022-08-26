<?php

namespace App\Models\PPE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skuadron501 extends Model
{
    use HasFactory;

    protected $table = 'skuadron501s';
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
