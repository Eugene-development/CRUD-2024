<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Mail extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'mail';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
