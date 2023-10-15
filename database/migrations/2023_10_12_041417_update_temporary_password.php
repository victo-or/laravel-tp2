<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateTemporaryPassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Ajouter la colonne temporary_password à la table etudiants
        Schema::table('etudiants', function (Blueprint $table) {
            $table->string('temporary_password')->nullable();
        });

        // Récupérer les enregistrements existants de la table etudiants
        $etudiants = DB::table('etudiants')->get();

        foreach ($etudiants as $etudiant) {
            // Générer le mot de passe temporaire haché à partir de la date de naissance
            $temporaryPassword = Hash::make($etudiant->date_de_naissance);

            // Metter à jour l'enregistrement avec le mot de passe temporaire haché
            DB::table('etudiants')->where('id', $etudiant->id)->update(['temporary_password' => $temporaryPassword]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
