<?php

namespace App\Policies;

use App\Models\CatatanPerjalanan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CatatanPerjalananPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatatanPerjalanan  $catatanPerjalanan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CatatanPerjalanan $catatanPerjalanan)
    {
        //
    }
}
