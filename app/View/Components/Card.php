<?php

namespace App\View\Components;

use Illuminate\View\Component;//Import de la classe Component fournie par Laravel afin que les composants Blade en hérite

//On déclare le composant Card
class Card extends Component
{
    //Constructeur du composant, qui s'exècutera à chaque fois que l'on appelles <x-card> ds une view
    public function __construct(
        public string $title,//= <x-card title="titre">
        public ?string $subTitle = null,
        public ?string $image = null,
        public ?string $link = null,
        public ?string $icon = null
    ) {}//Constructeur abrégé, évite d'écrire : $this->title = $title

    //Indique à Laravel quelle vue doit être rendue
    public function render()
    {
        return view('components.card');
    }
}
