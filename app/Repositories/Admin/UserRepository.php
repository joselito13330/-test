<?php
namespace App\Repositories\Admin;

use App\Models\User;

class UserRepository extends UserResourceRepository
{
  public function __construct(User $user)
	{
		$this->model = $user;
	}
}