<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AI_Character extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_handle",
        "gender",
        "firstname",
        "lastname",
        "age",
        "birthdate",
        "nationality",
        "body_type",
        "breast_size",
        "country",
        "state",
        "city",
        "cultural_background",
        "interested_in_sexting",
        "personality",
        "interests",
        "bio",
        "occupation",
        "relationship",
        "current_partner",
        "personal_style",
        "hips_width",
        "favorite_colors_and_patterns",
        "time_period_fashion",
        "social_rank",
        "looking_for_relationship",
        "goal_on_platform",
        "speech_style",
        "voice_style",
        "current_home",
        "current_workplace",
        "user_id",
    ];

    public function favorite_colors_and_pattern()
    {
        return $this->belongsTo(favorite_colors_and_pattern::class);
    }

    public function interest()
    {
        return $this->belongsTo(interest::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
