<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function show()
    {
        //Récupération des datas de geopolitique depuis config/data.geopolitique.php
        $actualiteData = config('data.themes');

        //On envoie à la vue
        return view('actualite', compact('actualiteData'));
    }
}
