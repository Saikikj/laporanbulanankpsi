<?php

namespace App\Models\KOM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FbbSimKad extends Model
{
    use HasFactory;

    protected $table = 'fbb_sim_kads';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
    'markasunit',
    'idrujukan',
    'kuotadata',
    'nosimkad',
    'pakejlangganan',
    'tarikhtamatlangganan',
    'bakiquota',
    'catatan',
    ];
}
