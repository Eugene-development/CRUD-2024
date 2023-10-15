<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'file';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
