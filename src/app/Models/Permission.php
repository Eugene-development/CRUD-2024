<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Permission extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'permission';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
