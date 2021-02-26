<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory;
    use SoftDeletes;

    /** */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function owner(){
        return $this->hasOne(User::class);
    }
}
