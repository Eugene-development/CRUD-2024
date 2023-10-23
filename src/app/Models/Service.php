<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Service extends RootModel
{
    protected $guarded = [];

    protected $table = 'service';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
