<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function show()
    {
        //Récupération des datas des themes depuis config/data.theme.php
        $themesData = config('data.themes.actualite');
        //Récupération des datas de actualité se trouvant ds config/data/actualité.php
        $actualiteData = config('data.actualite.page_content');

        //On envoie à la vue
        return view('actualite', compact('themesData', 'actualiteData'));
    }
}
