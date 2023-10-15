<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'phone';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
