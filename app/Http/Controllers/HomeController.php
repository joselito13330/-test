<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin\Document;

class HomeController extends Controller
{

public function accueil()
    {
        return view('index');
    }
    
public function admin(User $users)
    {
        if(Auth::user()->role == 1)
        {
        $pageTitre='adminIndex';
        $documents = Document::orderBy('category', 'desc')->get();
        return view('Admin.index', compact('documents', 'pageTitre'));
         }
    return redirect()->route('dashboard')->with('error','Tu n\'est pas autorisé à ouvrir ce dossier !');
    }

public function albumPhoto()
    {
        $pageTitre='albumIndex';
        return view('AlbumPhotos.index', compact('pageTitre'));
    }

public function association()
    {
        $pageTitre='assoIndex';
        return view('Association.index', compact('pageTitre'));
    }

public function dashboard()
    {
        $pageTitre='dashboard';
        return view('dashboard', compact('pageTitre'));
    }

public function histoire()
    {
        $pageTitre='histoireIndex';
        return view('Histoire.index', compact('pageTitre'));
    }

public function document(Document $documents)
    {
        $pageTitre='documentsIndex';
        $documents = Document::orderBy('langue', 'desc')
                              ->orderBy('category', 'asc')
                              ->get();
        return view('Documents.index', compact('documents', 'pageTitre'));
    }

public function qdn(Document $documents)
    {
        $pageTitre='QuoiDeNeuf';
        return view('QdN.index', compact('documents', 'pageTitre'));
    }

}

