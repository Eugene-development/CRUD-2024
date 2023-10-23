<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends RootModel
{

    protected $guarded = [];

    protected $table = 'address';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
