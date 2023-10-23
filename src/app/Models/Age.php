<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Age extends RootModel
{

    protected $guarded = [];

    protected $table = 'age';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
