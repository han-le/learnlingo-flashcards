<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title",
        "url",
        "category",
        "language",
        "published_date",
        "visible",
        "num_of_clicks",
        "featured_img_url",
    ];
}
