<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends RootModel
{

    protected $table = 'post';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
