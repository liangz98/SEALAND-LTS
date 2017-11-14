<?php

namespace App\Models;

class RegisterCourse extends Model
{
    protected $fillable = ['user_id', 'training_id', 'deleted', 'status'];
    
    public function training() {
        return $this->belongsTo(Training::class, 'training_id');
    }
    
    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
