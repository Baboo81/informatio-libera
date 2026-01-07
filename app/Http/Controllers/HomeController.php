<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //Récupération des datas de la home depuis config/data/home.php
        $homeData = config('data.home');

        //Récupération des commentaires :
        $comments = Comment::with('user')
            ->latest()
            ->get();

        //On envoie à la vue
        return view('home', compact('homeData', 'comments'));
    }
}
