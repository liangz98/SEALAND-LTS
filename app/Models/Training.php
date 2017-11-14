<?php

namespace App\Models;

class Training extends Model
{
    protected $fillable = ['category_id', 'title', 'en_title', 'number', 'level', 'body', 'en_content', 'location', 'en_location', 'start_date', 'end_date', 'deleted', 'status', 'created_by', 'last_updated_by'];
    
    // 反向关联  多个课程对一个分类
    public function trainingCategory() {
        return $this->belongsTo(TrainingCategory::class, 'category_id');
    }
    
    // 一个课程对多个课程申请
    public function registerCourses() {
        return $this->hasMany(RegisterCourse::class, 'training_id');
    }
    
    // 一个课程对多个认证
    public function certifications() {
        return $this->hasMany(Certification::class, 'training_id');
    }
}
