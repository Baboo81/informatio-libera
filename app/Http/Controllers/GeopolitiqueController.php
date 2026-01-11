<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeopolitiqueController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.geopolitique');
        //Récupération des datas de géopolitique se trouvant ds config/data/geopolitique.php
        $geopolitiqueData = config('data.geopolitique.page-content');

        //On envoie à la vue
        return view('geopolitique', compact('themesData', 'geopolitiqueData'));
    }
}
