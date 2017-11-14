<?php

namespace App\Models;

class News extends Model
{
    protected $fillable = ['subject', 'body', 'release_date', 'deleted', 'view_count', 'created_by', 'last_updated_by', 'excerpt', 'slug'];
}
