<?php

namespace App\Models;

class TrainingCategory extends Model
{
    protected $fillable = ['pid', 'name', 'en_name', 'desc', 'en_desc', 'deleted', 'status', 'created_by', 'last_updated_by'];
}
