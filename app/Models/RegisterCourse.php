<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class RegisterCourse extends Model
{
    // use Notifiable;
    use Notifiable;
    
    protected $fillable = ['training_id', 'application_form'];
    
    public function training() {
        return $this->belongsTo(Training::class, 'training_id');
    }
    
    public function member() {
        return $this->belongsTo(Member::class, 'member_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    /**
     * 邮件频道的路由
     *
     * @return string
     */
    public function routeNotificationForMail() {
        return env('MAIL_MANAGEMENT_SUPPER');
    }
}
