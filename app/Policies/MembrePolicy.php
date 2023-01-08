<?php

namespace App\Policies;

use App\Models\Admin\Membre;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class MembrePolicy
{
    use HandlesAuthorization;


    public function before($user, $ability)
          {
              if($user->role === "1")
                  {
                      return true;
                  }
              return null;
          }
    public function index(User $user)
        {
          //
        }
    
    public function create(User $user)
        {
          //
        }

    public function edit(User $user)
        {
          //
        }

    public function update(User $user)
        {
            //
        }

    public function destroy( User $user)
        {
          //
        }

     public function modif(User $user)
        {
          //
        }    
}
