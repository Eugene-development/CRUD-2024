<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Role extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'role';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
