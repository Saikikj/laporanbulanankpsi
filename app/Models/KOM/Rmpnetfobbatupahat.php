<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmpnetfobbatupahat extends Model
{
    use HasFactory;
    protected $table = 'rmpnetfobbatupahats';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'markasunit',
    'fitted',
    'mobile',
    'portable',
    'status',
    'catatan'
    ];
}
