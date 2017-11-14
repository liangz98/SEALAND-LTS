<?php

namespace App\Models;

class Certification extends Model
{
    protected $fillable = ['member_id', 'number', 'level', 'start_date', 'expiry_date', 'deleted', 'status', 'created_by', 'last_updated_by'];
    
    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }

    // 反向关联  多个认证对一个课程
    public function training() {
        return $this->belongsTo(Training::class, 'training_id');
    }
}
