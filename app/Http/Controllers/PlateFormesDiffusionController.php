<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlateFormesDiffusionController extends Controller
{
    public function show()
    {
        //Récupération des datas des thèmes depuis config/data/themes.php
        $themesData = config('data.themes.plate_formes_diffusion');
        //Récupération des datas de platesforme de diffusion ds config config/data/platesformeDiffusion.php
        $plateFormesDiffusionData = config('data.plateFormesDiffusion.page_content');

        //On envoie à la vue
        return view('plateFormesDiffusion', compact('themesData', 'plateFormesDiffusionData'));
    }
}
