<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Title extends RootModel
{
    protected $guarded = [];

    protected $table = 'title';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
