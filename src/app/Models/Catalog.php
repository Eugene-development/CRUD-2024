<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Model;


class Catalog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'catalog';

    public function rubric(): MorphMany
    {
        return $this->morphMany(Rubric::class, 'parentable');
    }

    public function text(): MorphMany
    {
        return $this->morphMany(Text::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
