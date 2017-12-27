<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class RegisterCourse extends Model
{
    // use Notifiable;
    use Notifiable;
    
    protected $fillable = ['training_id', 'en_company_name', 'company_name', 'en_company_address', 'company_address', 'company_phone', 'company_fax',
        'en_mailing_address', 'mailing_address', 'nace_number', 'en_name', 'name', 'en_department', 'department', 'en_title', 'title', 'identification_number',
        'phone', 'mobile', 'email', 'need_hotel', 'room_type', 'bed_type', 'hotel_check_in_name', 'hotel_check_in_date', 'hotel_days', 'need_invoice',
        'invoice_type', 'invoice_title', 'taxpayer_identification_number', 'invoice_address', 'invoice_phone', 'invoice_bank_name', 'invoice_bank_no', 'application_form'];
    
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
