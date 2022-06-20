<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @mixin IdeHelperPaste
 */
class Paste extends Model
{
    use HasFactory;

    use SoftDeletes;



    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function access()
    {
        return $this->belongsTo(Access::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }


}
