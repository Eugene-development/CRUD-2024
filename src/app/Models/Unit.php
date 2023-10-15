<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Unit extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'unit';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
