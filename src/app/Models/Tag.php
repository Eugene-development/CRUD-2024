<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'tag';

    public function taggable()
    {
        return $this->morphedByMany(Product::class, 'taggable')->withTimestamps();
    }
}
