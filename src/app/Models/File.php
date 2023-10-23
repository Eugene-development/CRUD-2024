<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends RootModel
{
    protected $guarded = [];

    protected $table = 'file';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
