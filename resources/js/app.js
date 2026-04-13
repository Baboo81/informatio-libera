// Charge le fichier bootstrap.js de Laravel
// 👉 il configure Axios, les headers CSRF, etc.
// 👉 indispensable pour les formulaires, requêtes AJAX, auth, sécurité
import './bootstrap';


// Importe Alpine.js
// 👉 micro-framework JS utilisé par Breeze
// 👉 parfait pour des interactions simples (dropdown, toggle, etc.)
import Alpine from 'alpinejs';


// Rend Alpine accessible globalement
window.Alpine = Alpine;

// Démarre Alpine
// 👉 active les directives x-data, x-show, x-on, etc.
Alpine.start();


// Optionnel : JS pour certains composants
import '@fortawesome/fontawesome-free/js/all.min.js';
