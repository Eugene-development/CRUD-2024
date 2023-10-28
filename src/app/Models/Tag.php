<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'tag';

    public function product()
    {
        return $this->morphedByMany(Product::class, 'taggable')->withTimestamps();
    }
}
