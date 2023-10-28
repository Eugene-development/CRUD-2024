<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'tag';

    public function product(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'taggable')->withTimestamps();
    }

    // public function parentable(): MorphToMany
    // {
    //     return $this->morphToMany();
    // }
}
