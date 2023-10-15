<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Post extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'post';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
