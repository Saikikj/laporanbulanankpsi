<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kat extends Model
{
    use HasFactory;
    protected $table = 'kats';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'penempatan',
    'markasunit',
    'kat2100',
    'kat3100',
    'kat3200',
    'kat3300',
    'skm700',
    'catatan'
    ];
}
