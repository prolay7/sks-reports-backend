<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnboardingPersonalDetails extends Model
{
    use HasFactory;

    protected $fillable = ['candidate_name','mobile_number','email_id'];
}
