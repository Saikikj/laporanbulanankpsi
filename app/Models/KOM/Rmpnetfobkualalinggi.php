<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmpnetfobkualalinggi extends Model
{
    use HasFactory;
    protected $table = 'rmpnetfobkualalinggis';
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
