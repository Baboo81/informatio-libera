<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntraideController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.entraide');
        //Récupération des datas de psychologie se trouvant ds config/data/entraide.php
        $entraideData = config('data.entraide.page_content');

        //On envoie à la vue
        return view('entraide', compact('themesData', 'entraideData'));

    }
}
