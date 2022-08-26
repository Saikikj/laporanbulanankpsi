<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rmpnet extends Model
{
    use HasFactory;
    protected $table = 'rmpnets';
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
