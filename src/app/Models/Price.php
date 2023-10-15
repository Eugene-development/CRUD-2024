<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Price extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'price';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
