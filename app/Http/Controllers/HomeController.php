<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PSpell\Config;

class HomeController extends Controller
{
    public function index()
    {
        //Récupération des datas de la home depuis config/data/home.php
        $homeData = config('data.home');

        //On envoie à la vue
        return view('home', compact('homeData'));
    }
}
