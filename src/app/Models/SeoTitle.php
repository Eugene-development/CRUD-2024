<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoTitle extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'seotitle';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
