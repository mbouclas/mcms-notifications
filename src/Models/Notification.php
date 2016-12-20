<?php

namespace IdeaSeven\Notifications\Models;

use IdeaSeven\Core\QueryFilters\Filterable;
use IdeaSeven\Core\Traits\Userable;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use Filterable, Userable;

    protected $fillable = [
        'title',
        'body',
        'user_groups',
        'users',
        'user_id',
        'settings',
        'thumb',
        'priority',
        'type',
        'sent'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public $casts = [
        'settings' => 'array',
        'thumb' => 'array',
        'user_groups' => 'array',
        'users' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(\Config::get('auth.providers.users.model'))
            ->withPivot('status')
            ->withTimestamps();
    }
}
