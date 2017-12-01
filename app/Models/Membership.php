<?php

namespace App\Models;

class Membership extends Model
{
    protected $fillable = ['member_id', 'start_date', 'expiry_date', 'deleted', 'status', 'created_by', 'last_updated_by'];
    
    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'member_id');
    }
    
    public function scopeExpiryRecent($query) {
        // 按照创建时间排序
        return $query->orderBy('expiry_date', 'desc');
    }
}
