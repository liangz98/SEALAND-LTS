<?php

namespace App\Models;

class Member extends Model
{
    protected $fillable = ['member_number', 'user_id', 'name', 'en_name', 'gender', 'email', 'oth_email', 'mobile_phone', 'oth_mobile_phone', 'country', 'en_country', 'country_code', 'state', 'en_state', 'state_code', 'city', 'en_city', 'street', 'en_street', 'address', 'en_address', 'company_name', 'en_company_name', 'title', 'company_address', 'en_company_address', 'mailing_address', 'en_mailing_address', 'mailing_name', 'mailing_mobile', 'certification_id', 'deleted', 'status', 'created_by', 'last_updated_by'];
    
    public function registerCourses() {
        return $this->hasMany(RegisterCourse::class, 'member_id');
    }
    
    public function certifications() {
        return $this->hasMany(Certification::class, 'member_id');
    }
}
