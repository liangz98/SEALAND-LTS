<?php

namespace App\Models;

class RenewCertification extends Model
{
    protected $fillable = ['user_id', 'number', 'level', 'first_name', 'last_name', 'birth_date', 'user_name', 'user_password', 'person_address', 'person_city', 'person_country', 'person_zip_code', 'person_email', 'person_phone', 'work_address', 'work_city', 'work_country', 'work_zip_code', 'work_email', 'work_phone', 'work_type', 'company_name', 'from_date', 'to_date', 'company_address', 'company_city', 'company_province', 'company_country', 'company_zip_code', 'title', 'description', 'deleted', 'status', 'created_by', 'last_updated_by'];
}
