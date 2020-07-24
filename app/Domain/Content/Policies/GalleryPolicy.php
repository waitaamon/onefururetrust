<?php

namespace App\Domain\Content\Policies;

use App\Domain\Content\Gallery;
use App\Domain\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any galleries.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the gallery.
     *
     * @param User $user
     * @param Gallery $gallery
     * @return mixed
     */
    public function view(User $user, Gallery $gallery)
    {
		return true;
    }

    /**
     * Determine whether the user can create galleries.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
		return false;
    }

    /**
     * Determine whether the user can update the gallery.
     *
     * @param User $user
     * @param Gallery $gallery
     * @return mixed
     */
    public function update(User $user, Gallery $gallery)
    {
		return true;
    }

    /**
     * Determine whether the user can delete the gallery.
     *
     * @param User $user
     * @param Gallery $gallery
     * @return mixed
     */
    public function delete(User $user, Gallery $gallery)
    {
		return false;
    }

    /**
     * Determine whether the user can restore the gallery.
     *
     * @param User $user
     * @param Gallery $gallery
     * @return mixed
     */
    public function restore(User $user, Gallery $gallery)
    {
		return false;
    }

    /**
     * Determine whether the user can permanently delete the gallery.
     *
     * @param User $user
     * @param Gallery $gallery
     * @return mixed
     */
    public function forceDelete(User $user, Gallery $gallery)
    {
		return false;
    }
}
