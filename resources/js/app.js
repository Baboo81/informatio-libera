// Charge le fichier bootstrap.js de Laravel
// 👉 il configure Axios, les headers CSRF, etc.
// 👉 indispensable pour les formulaires, requêtes AJAX, auth, sécurité
import './bootstrap';

// Importe le CSS global de l’application
// 👉 styles généraux (reset, layout, tailwind via Breeze, etc.)
import '../css/app.css';

// Importe le CSS spécifique à la navbar
// 👉 styles personnalisés pour la nav
// 👉 sera compilé par Vite et injecté automatiquement
import '../css/components/card.css';
import '../css/navbar.css';
import '../css/home.css';
import '../css/geopolitique.css';
import '../css/actualite.css';
import '../css/sante.css';
import '../css/souverainete.css';
// Importe Alpine.js
// 👉 micro-framework JS utilisé par Breeze
// 👉 parfait pour des interactions simples (dropdown, toggle, etc.)
import Alpine from 'alpinejs';


// Rend Alpine accessible globalement
window.Alpine = Alpine;

// Démarre Alpine
// 👉 active les directives x-data, x-show, x-on, etc.
Alpine.start();

// Import CSS FontAwesome
import '@fortawesome/fontawesome-free/css/all.min.css';
// Optionnel : JS pour certains composants
import '@fortawesome/fontawesome-free/js/all.min.js';
