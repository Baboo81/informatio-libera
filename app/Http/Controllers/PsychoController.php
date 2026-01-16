<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsychoController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.psycho');
        //Récupération des datas de psychologie se trouvant ds config/data/psycho.php
        $psychoData = config('data.psycho.page_content');

        //On envoie à la vue
        return view('psycho', compact('themesData', 'psychoData'));
    }
}
