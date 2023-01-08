<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\UserRepository;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;

use App\Models\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        protected $userRepository;
       
public function __construct(UserRepository $userRepository)
    {
      $this->userRepository = $userRepository;
       $this->middleware('auth');
    }

  public function index(User $user )
    {
      $this->authorize('index', $user); 
      $user  = $this->userRepository->getUserList();
      return view('Membres.index',compact('user'));
    }

    public function create(User $user)
    {
        $this->authorize('create', $user); 
        $user =new User;
        return view('Membres.create', compact('user'));  
    }

  public function store(UserFormRequest $request, User $user)
    {
      $this->userRepository->updateOrCreate($request, $user);
      return redirect()->route('Membres.index')->withInput()->with('success' . $request->name . ' est bien enregistré');
    }

 public function modif(User $user )
    {
      $this->authorize('modif', User::class);
      $user  = $this->userRepository->getUserList();
      return view('Membres.modif', compact('user'));
    }    

   public function edit(User $user , $id)
    {
      $this->authorize('edit', User::class);
      $user  = $this->userRepository->getById($id);
      return view('Membres.edit', compact('user'));
    }

    public function update(Request $request, User $user )
    {   
      $user  = $this->userRepository->updateOrCreate($request, $user );
      return redirect()->route('Membres.index')->withInput()->with('success','Les données enregistées de l\'ouvrage ' . $user->name . ' ont été mises à jour');
    }

    public function destroy( User $user , $id)
    {
      $this->authorize('destroy', User::class);
      $user  = $this->userRepository->destroy($id);
      return redirect()->route('Membres.index')->with('warning','L\'adhérent'  . $user->name . '  a été supprimé');
    }
}
