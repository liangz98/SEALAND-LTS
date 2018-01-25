<?php

namespace App\Models;

class Snew extends Model
{
    protected $table = 'snews';
    
    protected $fillable = ['subject', 'body', 'release_date', 'deleted', 'view_count', 'created_by', 'last_updated_by', 'excerpt', 'excerpt_bg', 'slug'];
}
