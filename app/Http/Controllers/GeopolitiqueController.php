<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeopolitiqueController extends Controller
{
    public function show()
    {
        //Récupération des datas de geopolitique depuis config/data.geopolitique.php
        $geopolitiqueData = config('data.themes.geopolitique');

        //On envoie à la vue
        return view('geopolitique', compact('geopolitiqueData'));
    }
}
