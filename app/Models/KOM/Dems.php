<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dems extends Model
{
    use HasFactory;

    protected $table = 'dems';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'node',
    'penempatan',
    'hh',
    'uu',
    'unitnaungan',
    'ktikomp',
    'jenamakomp',
    'statuskomp',
    'tahunkomp',

    'ktiprinter',
    'jenamaprinter',
    'statusprinter',
    'tahunprinter',

    'ktiscanner',
    'jenamascanner',
    'statusscanner',
    'tahunscanner',
    
    'ktiaircond',
    'statusaircond',
    'tahunaircond',
    'catatan',
    ];
}
