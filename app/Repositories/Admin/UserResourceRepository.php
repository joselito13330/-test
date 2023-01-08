<?php
namespace App\Repositories\Admin;

use App\Models\User;
use App\Repositories\Admin\UserRepository;
use App\Http\Requests\UserFormRequest;

use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

abstract class UserResourceRepository
{
   protected $model;

public function getUserList()
   {
      return $this->model->orderBy('role', 'desc')
                           ->orderBy('name', 'asc')
                           ->get();
   }

public function getById($id)
      {
         return $this->model->findOrFail($id);
      }

   public function updateOrCreate(Request $request, User $user)
   {
      $id = $request->id;
      $user = $request->all();
      $password = ($id === NULL ? Hash::make($request->password) : $request->password);
      
   $user = $this->model::updateOrCreate(
               [
                  'id' => $id,         
               ],
               [
                  'name'      =>$request->name ,
                  'email'     =>$request->email ,
                  'role'      =>$request->role ,
                  'password'  =>$password,        
               ]);

         return $user;
   } 

  public function destroy($id)
   {
      $user = $this->getById($id);
      User::where('id', $id)->delete();
      return $user;
   }
}