<?php

namespace App\Models\User;

use App\User;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 *
 * @package App\Models\User
 */
class Profile extends Model
{
    use HasTimestamps, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'users_profiles';

    protected $fillable = [
        'title',
        'arrived_at',
        'occupation',
    ];

    protected $dates = [
        'arrived_at'
    ];

    /**
     * @return BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
