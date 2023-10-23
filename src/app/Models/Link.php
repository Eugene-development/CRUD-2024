<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Link extends RootModel
{

    protected $guarded = [];

    protected $table = 'link';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
