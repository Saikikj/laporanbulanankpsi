<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmpnetmpat extends Model
{
    use HasFactory;
    protected $table = 'rmpnetmpats';
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
