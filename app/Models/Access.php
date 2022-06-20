<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @mixin IdeHelperAccess
 */
class Access extends Model
{
    use HasFactory;


    protected $fillable  = ['access'];
    protected $guarded = ['id'];


    public function paste():HasMany
    {
        return $this->hasMany(Paste::class);
    }
}
