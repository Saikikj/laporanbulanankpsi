<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RmpnetMwl1 extends Model
{
    use HasFactory;
    protected $table = 'rmpnet_mwl1s';
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
