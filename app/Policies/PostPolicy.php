<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function update(User $user, Post $post): bool
    {
        // 投稿作成者のみ編集を許可
        return $user->id === $post->user_id;
    }

    public function delete(User $user, Post $post): bool
    {
        // 投稿作成者のみ削除を許可
        return $user->id === $post->user_id;
    }
}
