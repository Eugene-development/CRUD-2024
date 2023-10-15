<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends RootModel
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'cart';
}
