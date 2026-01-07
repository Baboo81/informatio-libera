<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //Constructeur du contrôleur
    public function __construct()
    {
        //Applique le middleware 'auth' à toutes les méthodes de ce contrôleur,
        //afin que seuls les utilisateurs connectés puisssent accèder aux commentaire :
        $this->middleware('auth')->only('store');
    }

    // Méthode pour stocker un nouveau commentaire :
    public function store(Request $request)
    {
        // Validation du formulaire avant de créer le commentaire
        // Ici, on exige que le champ 'content' :
        // - soit présent (required)
        // - ait au moins 5 caractères (min:5)
        $request->validate([
            'content' => 'required|min:5',
        ]);

        // Création d’un nouveau commentaire dans la base
        // On utilise la méthode create() du modèle Comment
        // $request->content → texte du commentaire
        // auth()->id() → récupère l'identifiant de l'utilisateur connecté
        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        // Redirige l'utilisateur vers la page précédente
        // avec un message flash "success" pour indiquer que le commentaire a été envoyé
        return back()->with('success', 'Commentaire envoyé pour validation.');
    }
}
