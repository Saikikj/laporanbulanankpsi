<?php

namespace App\Models;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompMejaModel extends Model
{
    use HasFactory;
    protected $table = "kompmeja";
    protected $primaryKey = "id_unit";
    protected $keyType = "String";
}
