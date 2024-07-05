<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class postPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, post $post):bool
    {
        return $user->id == $post->user_id;
    }

    public function delete(User $user, post $post):bool
    {
        return $user->id == $post->user_id;
    }


}
