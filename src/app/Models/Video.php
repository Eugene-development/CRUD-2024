<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Video extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'video';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
