<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;

class BlogPostPolicy
{
    public function viewAny(User $user): bool
    {
        return true; // Admin, Editor, Viewer can list
    }

    public function view(User $user, BlogPost $blogPost): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->isAdmin() || $user->isEditor();
    }

    public function update(User $user, BlogPost $blogPost): bool
    {
        return $user->isAdmin() || $user->isEditor();
    }

    public function delete(User $user, BlogPost $blogPost): bool
    {
        return $user->isAdmin() || $user->isEditor();
    }
}
