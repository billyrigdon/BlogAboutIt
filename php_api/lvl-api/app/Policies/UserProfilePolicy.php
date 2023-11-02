<?php

namespace App\Policies;

use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserProfilePolicy {
  use HandlesAuthorization;

  public function updateUserProfile(User $user, UserProfile $userProfile) {
    return $user->id === $userProfile->user_id;
  }
}
