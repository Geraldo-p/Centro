<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class blog_tags extends Pivot
{
    protected $table = 'blog_tags';
    public $timestamps = false;
}
