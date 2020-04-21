<?php

namespace App\Domain\Pages\Policies;

use App\Domain\Pages\Contact;
use App\Domain\Users\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any contacts.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the contact.
     *
     * @param User $user
     * @param Contact $contact
     * @return mixed
     */
    public function view(User $user, Contact $contact)
    {
		return true;
    }

    /**
     * Determine whether the user can create contacts.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
		return false;
    }

    /**
     * Determine whether the user can update the contact.
     *
     * @param User $user
     * @param Contact $contact
     * @return mixed
     */
    public function update(User $user, Contact $contact)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the contact.
     *
     * @param User $user
     * @param Contact $contact
     * @return mixed
     */
    public function delete(User $user, Contact $contact)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the contact.
     *
     * @param User $user
     * @param Contact $contact
     * @return mixed
     */
    public function restore(User $user, Contact $contact)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the contact.
     *
     * @param User $user
     * @param Contact $contact
     * @return mixed
     */
    public function forceDelete(User $user, Contact $contact)
    {
        return false;
    }
}
