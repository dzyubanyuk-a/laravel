<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @mixin IdeHelperLanguage
 */
class Language extends Model
{
    use HasFactory;

    public function paste()
    {
        return $this->hasMany(Paste::class);
    }

}
