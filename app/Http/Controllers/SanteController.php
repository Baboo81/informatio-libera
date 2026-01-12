<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanteController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.sante');
        //Récupération des datas de santé se trouvant ds config/data/sante.php
        $santeData = config('data.sante.page_content');

        //On envoie à la vue
        return view('sante', compact('themesData', 'santeData'));
    }
}
