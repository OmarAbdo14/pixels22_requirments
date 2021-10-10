<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'university', 'faculty', 'department', 'academic_year', 'facebook_profile_link',
        'living_area', 'first_question', 'second_question', 'first_preference_committee',
        'first_preference_committee_first_question', 'first_preference_committee_second_question',
        'second_preference_committee',
//        'second_preference_committee_first_question', 'second_preference_committee_second_question',
    ];
}
