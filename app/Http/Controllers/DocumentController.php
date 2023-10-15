<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::Select()
        ->paginate(5);
    
        return view('document.index', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'title_fr' => 'required|max:100',
            'document_name' => 'required|file|mimes:pdf,zip,doc|max:10240', // Taille maximale de 10 Mo
        ]);

        if ($request->hasFile('document_name')) {
            $file = $request->file('document_name');
            // $fileName = $file->getClientOriginalName();
            $fileName = time().'.'.$request->document_name->extension();
            $file->move(public_path('uploads'), $fileName);
            
            $newDocument = Document::create([
                'title' => $request->title,
                'title_fr' => $request->title_fr,
                'file_name' => $fileName,
                'user_id' => Auth::user()->id
            ]);
            // Storage::disk('local')->put('path/to/store/'.$fileName, file_get_contents($file));
            // $file->store('documents');
            return redirect(route('document.index'))->withSuccess(trans('lang.text_data_insert'));
        }


        // Enregistrez les autres champs du formulaire, par exemple 'title' et 'title_fr'.
        // ...

        // Redirigez l'utilisateur après avoir enregistré le document.
        // ...
    }








}
