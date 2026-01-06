<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     // La propriété $fillable indique quelles colonnes de la table peuvent être "remplies en masse"
    // Cela permet d'utiliser Comment::create([...]) en toute sécurité
    // Ici, on autorise :
    // - 'content' : le texte du commentaire
    // - 'user_id' : l'identifiant de l'utilisateur qui a posté le commentaire
    // - 'is_approved' : booléen pour la modération (true = approuvé)
    protected $fillable = ['content', 'user_id', 'is_approved'];


    // Cette fonction définit une relation avec le modèle User
    // Chaque commentaire "appartient à" un utilisateur
    // Cela permet d'appeler $comment->user pour récupérer l'utilisateur qui a posté le commentaire
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
