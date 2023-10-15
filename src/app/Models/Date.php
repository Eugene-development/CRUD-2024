<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Date extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'date';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
