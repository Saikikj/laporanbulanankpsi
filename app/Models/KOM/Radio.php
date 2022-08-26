<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;
    protected $table = 'radios';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'kapalpangkalan',
    'unit',
    'jenisradio',
    'hf',
    'vuhf',
    'vhf ',
    'baik',
    'rosak',
    'fitted',
    'portable',
    'ipnonip',
    'tahun',
    'usia',
    'catatan'
    ];
}
