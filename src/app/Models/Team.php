<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Team extends RootModel
{
    protected $guarded = [];

    protected $table = 'team';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
