<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoDescription extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'seodescription';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
