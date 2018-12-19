<?php

namespace Cesargb\MagicLink\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MagicLink extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->hasOne(config('auth.providers.users.model'), config('magiclink.user_primarykey', 'id'), 'users_id');
    }
}
