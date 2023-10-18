<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::orderBy('created_at', 'desc')
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
            'document_name' => 'required|file|mimes:pdf,zip,doc|max:8192',
        ]);

        if ($request->hasFile('document_name')) {
            $file = $request->file('document_name');
            $fileName = time().'.'.$request->document_name->extension();
            $file->move(public_path('uploads'), $fileName);
            
            $newDocument = Document::create([
                'title' => $request->title,
                'title_fr' => $request->title_fr,
                'file_name' => $fileName,
                'user_id' => Auth::user()->id
            ]);

            return redirect(route('document.index'))->withSuccess(trans('lang.text_data_insert'));
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        // var_dump($document->id);
        return view('document.edit', ['document' => $document]);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'title' => 'required|max:100',
            'title_fr' => 'required|max:100',
            'document_name' => 'file|mimes:pdf,zip,doc|max:8192',
        ]);
    
        // Récupérer le document depuis la base de données
        $document = Document::find($document->id);

        // Vérifier si l'utilisateur actuel est l'auteur du document
        if (Auth::user()->id !== $document->user_id) {
            // L'utilisateur n'est pas autorisé, renvoyez un message d'erreur ou redirigez-le.
            return redirect()->route('document.index')->withError(trans('lang.text_not_authorized'));
        }
    
        // Mettre à jour les autres attributs du document
        $document->title = $request->input('title');
        $document->title_fr = $request->input('title_fr');
    
        if ($request->hasFile('document_name')) {
            // Si un nouveau fichier est téléchargé, mettre à jour le fichier
            $file = $request->file('document_name');
            $fileName = time().'.'.$file->extension();
            $file->move(public_path('uploads'), $fileName);
    
            // Supprimer l'ancien fichier s'il existe
            if (File::exists(public_path('uploads/' . $document->file_name))) {
                File::delete(public_path('uploads/' . $document->file_name));
            }
    
            $document->file_name = $fileName;
        }
    
        $document->save();

        return redirect()->route('document.index')->withSuccess(trans('lang.text_data_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        // Vérifier si l'utilisateur actuel est l'auteur du document
        if (Auth::user()->id !== $document->user_id) {
            // L'utilisateur n'est pas autorisé, renvoyez un message d'erreur ou redirigez-le.
            return redirect()->route('document.index')->withError(trans('lang.text_not_authorized'));
        }

        // Supprimer le fichier s'il existe
        if (File::exists(public_path('uploads/' . $document->file_name))) {
            File::delete(public_path('uploads/' . $document->file_name));
        }

        $document->delete();

        return back()->withSuccess(trans('lang.text_data_delete'));
    }

}









