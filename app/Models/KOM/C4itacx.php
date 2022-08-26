<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C4itacx extends Model
{
    use HasFactory;

    protected $table = 'c4itacxes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'markasunit',
    'c4itacx',
    'baik',
    'rosak',
    'catatan'
    ];
}
