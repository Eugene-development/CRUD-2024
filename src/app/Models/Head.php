<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Head extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'head';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
