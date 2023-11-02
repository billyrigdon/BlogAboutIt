<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {
  protected $fillable = [
    'user_id',
    'display_name',
    'bio',
    'profile_picture',
    'background_picture',
    'music',
    'interests',
    'website',
    'location',
    'birthday',
    'relationship_status',
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }
}
