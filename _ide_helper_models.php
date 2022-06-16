<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Access
 *
 * @property int $id
 * @property int $access
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Paste[] $paste
 * @property-read int|null $paste_count
 * @method static \Illuminate\Database\Eloquent\Builder|Access newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Access newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Access query()
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereAccess($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Access whereUpdatedAt($value)
 */
	class Access extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Activity
 *
 * @property int $id
 * @property int $activity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Paste[] $paste
 * @property-read int|null $paste_count
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Code
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Code newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Code newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Code query()
 */
	class Code extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $language
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Paste[] $paste
 * @property-read int|null $paste_count
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Paste extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

