<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Admin\Document;
use App\Repositories\Admin\DocumentRepository;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DocumentFormRequest;

use App\Models\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
        protected $documentRepository;
       
public function __construct(DocumentRepository $documentRepository)
    {
      $this->documentRepository = $documentRepository;
       $this->middleware('auth');
    }

public function create(User $user,  Document $documents)
    {
        $this->authorize('create', $documents); 
        $documents =new Document;
        return view('Admin.create', compact('documents'));  
    }

public function store(DocumentFormRequest $request, Document $documents)
    {
      $this->documentRepository->updateOrCreate($request, $documents);
      return redirect()->route('Admin.index')->withInput()->with('success',' L\'ouvrage ' . $request->titre . ' est bien enregistré');
    }

 public function modif(Document $documents)
    {
      $this->authorize('modif', Document::class);
      $documents = $this->documentRepository->getDocumentsList();
      return view('Admin.modif', compact('documents'));
    }    

   public function edit(Document $documents, $id)
    {
      $this->authorize('edit', Document::class);
      $documents = $this->documentRepository->getById($id);
      return view('Admin.edit', compact('documents'));
    }

    public function update(Request $request, Document $documents)
    {   
      $documents = $this->documentRepository->updateOrCreate($request, $documents);
      
      return redirect()->route('Admin.index')->withInput()->with('success','Les données enregistées de l\'ouvrage ' . $documents->titre . ' ont été mises à jour');
    }

    public function destroy( Document $documents, $id)
    {
      $this->authorize('destroy', Document::class);
      $documents = $this->documentRepository->destroy($id);
      return redirect()->route('Admin.index')->with('warning','L\'ouvrage'  . $documents->titre . '  a été supprimé');
    }
}
