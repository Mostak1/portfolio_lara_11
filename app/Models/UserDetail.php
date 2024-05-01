<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[ 'user_id', 'full_name', 'image', 'present_address', 'permanent_address', 'mobile_no', 'alternative_mobile_no', 'email', 'alternative_email', 'career_object', 'father_name', 'mother_name', 'date_of_birth', 'gender', 'marital_status', 'nationality', 'religion', 'blood_group'];
}
