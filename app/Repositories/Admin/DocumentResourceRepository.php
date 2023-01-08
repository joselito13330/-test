<?php
namespace App\Repositories\Admin;

use App\Models\Admin\Document;
use App\Repositories\Admin\DocumentRepository;
use App\Http\Requests\Admin\DocumentFormRequest;

use Carbon\Carbon;
use App\Models\User;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class DocumentResourceRepository
{
   protected $model;

public function getDocumentsList()
   {
      //return $this->model->orderBy('langue', 'desc')->get();
      return $this->model
                  ->orderBy('langue', 'asc')
                  ->orderBy('category', 'asc')
                  ->get();
   }

public function getById($id)
      {
         return $this->model->findOrFail($id);
      }

   public function updateOrCreate(Request $request, Document $documents)
   {
      $lien = 'Pdf/' . $request->titre . '.pdf';
      $id = $request->id;
      
    $this->model::updateOrCreate(
               [
                  'id' => $id,         
               ],
               [
                  'titre'    =>$request->titre ,
                  'auteur'   =>$request->auteur ,
                  'category' =>$request->category ,
                  'langue'   =>$request->langue , 
                  'lien'     =>$lien,         
               ]);

         return $documents;
   } 

  public function destroy($id)
   {
      $documents = $this->getById($id);
      Document::where('id', $id)->delete();
      return $documents;
   }
}