<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemICT extends Model
{
    use HasFactory;
    protected $table = 'sistem_i_c_t_s';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'lokasi'
    ];
}
