<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM `etudiants` 
        $etudiants = Etudiant::orderBy('created_at', 'desc')->get();
        return view('etudiant.index', ['etudiants'=>$etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create', ['villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|min:2',
            'adresse' => 'required',
            'phone' => 'required|regex:/^(\+?\d{1,3}[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/',
            'email' => 'required|email|unique:users',
            'date_de_naissance' => 'required|date|before:16 years ago|after:100 years ago',
            'ville_id' => 'required|exists:villes,id'
        ]);

        // Ajout dans la table users en premier afin de récupérer son id
        $newUser = User::create([
            'name' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->date_de_naissance)
        ]);

        $newEtudiant = new Etudiant([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id
        ]);

        $newEtudiant->userSameId()->associate($newUser);
        $newEtudiant->save();
        
        return redirect(route('etudiant.index'))->withSuccess(trans('lang.text_data_insert'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        // la méthode show revient à:
        // $etudiant = SELECT * FROM `etudiants` WHERE id = $etudiant;
        // return $etudiant;
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiant.edit', ['etudiant' => $etudiant, 'villes'=>$villes]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required|string|min:2',
            'adresse' => 'required',
            'phone' => 'required|regex:/^(\+?\d{1,3}[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/',
            'email' => 'required|email|unique:users,email,' . $etudiant->user_id,
            'date_de_naissance' => 'required|date',
            'ville_id' => 'required|exists:villes,id',
        ]);
    
        if ($etudiant) {
            // Mettez à jour les champs de l'étudiant
            $etudiant->nom = $request->nom;
            $etudiant->adresse = $request->adresse;
            $etudiant->phone = $request->phone;
            $etudiant->email = $request->email;
            $etudiant->date_de_naissance = $request->date_de_naissance;
            $etudiant->ville_id = $request->ville_id;
            $etudiant->save();
    
            // Mettez à jour l'utilisateur correspondant dans la table users
            $user = User::find($etudiant->user_id);
            if ($user) {
                $user->name = $request->nom;
                $user->email = $request->email;
                $user->save();
            }
    
            return redirect()->route('etudiant.show', $etudiant->user_id)->withSuccess(trans('lang.text_data_update'));
        } else {
            // Gérez le cas où l'étudiant n'a pas été trouvé
            return redirect()->route('etudiant.index')->withError(trans('lang.text_not_found'));
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        // return $etudiant;
        $etudiant->delete();

        return redirect(route('etudiant.index'))->withSuccess(trans('lang.text_data_delete'));
    }
}
