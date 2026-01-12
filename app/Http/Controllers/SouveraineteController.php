<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SouveraineteController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.souverainete');
        //Récupération des datas de souveraineté se trouvant ds config/data/souveraineté.php
        $souveraineteData = config('data.souverainete.page_content');

        //On envoie à la vue
        return view('souverainete', compact('themesData', 'souveraineteData'));
    }
}
