<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SciencesController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.sciences');
        //Récupération des datas de psychologie se trouvant ds config/data/sciences.php
        $sciencesData = config('data.sciences.page_content');

        //On envoie à la vue
        return view('sciences', compact('themesData', 'sciencesData'));
    }
}
