<?php

namespace App\Models;

class Membership extends Model
{
    protected $fillable = ['member_id', 'start_date', 'expiry_date', 'deleted', 'status', 'created_by', 'last_updated_by'];
}
