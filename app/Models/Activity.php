<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @mixin IdeHelperActivity
 */
class Activity extends Model
{
    use HasFactory;


    public function paste()
    {
        return $this->hasMany(Paste::class);
    }
}
