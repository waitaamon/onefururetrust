<?php

namespace App\Domain\Pages\Policies;

use App\Domain\Pages\About;
use App\Domain\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any abouts.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the about.
     *
     * @param User $user
     * @param About $about
     * @return mixed
     */
    public function view(User $user, About $about)
    {
		return true;
    }

    /**
     * Determine whether the user can create abouts.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
		return false;
    }

    /**
     * Determine whether the user can update the about.
     *
     * @param User $user
     * @param About $about
     * @return mixed
     */
    public function update(User $user, About $about)
    {
		return true;
    }

    /**
     * Determine whether the user can delete the about.
     *
     * @param User $user
     * @param About $about
     * @return mixed
     */
    public function delete(User $user, About $about)
    {
		return false;
    }

    /**
     * Determine whether the user can restore the about.
     *
     * @param User $user
     * @param About $about
     * @return mixed
     */
    public function restore(User $user, About $about)
    {
		return false;
    }

    /**
     * Determine whether the user can permanently delete the about.
     *
     * @param User $user
     * @param About $about
     * @return mixed
     */
    public function forceDelete(User $user, About $about)
    {
		return false;
    }
}
