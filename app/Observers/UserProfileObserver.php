<?php

namespace App\Observers;

use App\UserProfile;

class UserProfileObserver
{
    /**
     * Handle the user profile "created" event.
     *
     * @param  \App\UserProfile  $userProfile
     * @return void
     */
    public function created(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the user profile "updated" event.
     *
     * @param  \App\UserProfile  $userProfile
     * @return void
     */
    public function updated(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the user profile "deleted" event.
     *
     * @param  \App\UserProfile  $userProfile
     * @return void
     */
    public function deleted(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the user profile "restored" event.
     *
     * @param  \App\UserProfile  $userProfile
     * @return void
     */
    public function restored(UserProfile $userProfile)
    {
        //
    }

    /**
     * Handle the user profile "force deleted" event.
     *
     * @param  \App\UserProfile  $userProfile
     * @return void
     */
    public function forceDeleted(UserProfile $userProfile)
    {
        //
    }
}
