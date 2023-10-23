<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Product extends RootModel
{

    protected $guarded = [];

    protected $table = 'product';

    public function property(): MorphMany
    {
        return $this->morphMany(Property::class, 'parentable');
    }

    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'parentable');
    }

    public function unit(): MorphOne
    {
        return $this->morphOne(Unit::class, 'parentable');
    }

    public function text(): MorphMany
    {
        return $this->morphMany(Text::class, 'parentable');
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
