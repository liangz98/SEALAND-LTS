<?php

namespace App\Models;

class TrainingCategory extends Model
{
    protected $fillable = ['pid', 'name', 'en_name', 'desc', 'en_desc', 'deleted', 'status', 'created_by', 'last_updated_by'];
    
    public function trainingCategories() {
        return $this->hasMany(TrainingCategory::class, 'pid');
    }
    
    public function trainingCategory() {
        return $this->belongsTo(TrainingCategory::class, 'pid');
    }
    
    public function trainings() {
        return $this->hasMany(Training::class, 'category_id');
    }

}
