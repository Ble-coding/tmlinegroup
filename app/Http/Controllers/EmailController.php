<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function envoyerEmail(Request $request)
    {
        // Validation des données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
        ]);
    
        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return response()->json(['message' => 'Veuillez remplir tous les champs du formulaire.'], 400);
        }
    
        // Si la validation réussit, continuer avec l'envoi de l'e-mail
    
        $nom = $request->input('nom');
        $email = $request->input('email');
        $sujet = $request->input('sujet');
        $message = $request->input('message');
    
        // Envoi de l'e-mail
        Mail::raw($message, function ($m) use ($email, $nom, $sujet) {
            $m->from($email, $nom);
            $m->to('levisble@gmail.com')->subject($sujet);
        });

        // Retourne une réponse JSON en cas de succès
        return response()->json(['message' => 'Votre message a été envoyé avec succès.']);
    }
}
