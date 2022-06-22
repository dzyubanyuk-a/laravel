<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\Paste
 *
 * @property int $id
 * @property string $title
 * @property string $paste
 * @property int $language_id
 * @property int $access_id
 * @property string $token
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string $lifetime
 * @property-read \App\Models\Access $access
 * @property-read \App\Models\Activity|null $activity
 * @property-read \App\Models\Language $language
 * @method static \Database\Factories\PasteFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paste newQuery()
 * @method static \Illuminate\Database\Query\Builder|Paste onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Paste query()
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereAccessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereLifetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste wherePaste($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paste whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Paste withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Paste withoutTrashed()
 * @mixin Eloquent
 */
class Paste extends Model
{
    use HasFactory;

    use SoftDeletes;



    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function access(): BelongsTo
    {
        return $this->belongsTo(Access::class);
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }


}
