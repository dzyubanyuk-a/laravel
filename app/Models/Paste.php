<?php

namespace App\Models;

use App\Domain\Enums\Accesses\Accesses;
use App\Domain\Enums\Activities\Activities;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Language;

class Paste extends Model
{
    use HasFactory;

    use SoftDeletes;

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
