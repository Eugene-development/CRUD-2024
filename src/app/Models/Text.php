<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Text extends RootModel
{
    protected $guarded = [];

    protected $table = 'text';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
