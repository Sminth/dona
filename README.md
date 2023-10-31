![logo](docs/logom.png)

Cette plateforme permettra aux utilisateurs de faire des dons en toute confiance via MTN Mobile Money une initiative née lors du Hackathon MOMO 2023. Le projet est construit avec PHP (Laravel) et utilise une base de données MySQL. Votre soutien nous aidera à continuer à fournir des analyses précises et des fonctionnalités innovantes qui renforcent la démocratie et l'engagement citoyen.


![Aperçu](docs/home.png)

### Requirements
<table>
<tbody>
 <tr>
      <td align="center" valign="middle">
        <a href="https://git-scm.com/" target="_blank">
          <img width="80px" src="https://git-scm.com/images/logo@2x.png">
        </a>
      </td>
      <td align="center" valign="middle">
        <a href="https://laravel.com/" target="_blank">
          <img width="80px" src="https://laravel.com/img/logotype.min.svg">
        </a>
      </td>
       <td align="center" valign="middle">
        <a href="http://snapsvg.io/" target="_blank">
          <img width="80px" src="http://snapsvg.io/assets/images/logo.svg">
        </a>
      </td>
      <td align="center" valign="middle">
        <a href="https://www.jetbrains.com/fr-fr/phpstorm/" target="_blank">
          <img width="80px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/WebStorm_Icon.svg/1200px-WebStorm_Icon.svg.png">
        </a>
      </td>
       <td align="center" valign="middle">
        <a href="https://vitejs.dev/" target="_blank">
          <img width="80px" src="https://vitejs.dev/logo.svg">
        </a>
      </td>
  </tr>
</tbody>
</table>

### Installation

1. Cloner le projet
2. Installer les dépendances avec `composer install`
3. Installer les dépendances avec `npm install`
4. Créer un fichier `.env` à partir du fichier `.env.example`
5. Générer une clé d'application avec `php artisan key:generate`
6. Créer une base de données MySQL
7. Configurer le fichier `.env` avec les informations de la base de données
8. Exécuter les migrations avec `php artisan migrate`
9. Exécuter les seeders avec `php artisan db:seed`
10. Compiler les assets avec `npm run dev`
11. Lancer le serveur avec `php artisan serve`
12. Accéder à l'application à l'adresse `http://localhost:8000`

### Structure du projet

```text  
├─ app              // Application source code
├─ bootstrap        // Bootstrap files
├─ config           // Configuration files
├─ database         // Database files
├─ Documentation    // Documentation files
├─ public           // static assets.  
├─ storage          // Storage files 
├─ lang             // Language files
├─ routes           // Route files
├─ resources        // Resource files
│  ├─ js            // Contient l'application VUE JS
│  ├─ scss          // contient les fichiers scss
│  └─ views         // Contient la page index.php qui lance le projet   
├─ .editorconfig      
├─ .env   
├─ tsconfig.json    // configuration de typescript
├─ package.json     // Liste des packages npm du projets
├─ README.md        // Fichier de documentation
├─ vite.config.ts   // Configuration de vite
├─ tslint.json      // Configuration de tslint
├─ tailwind.config.js // Configuration de tailwind
├─ composer.json    // Liste des packages composer du projets
├─ artisan          // Fichier artisan
├─ .gitignore       // Fichier gitignore
├─ .gitattributes    // Fichier gitattributes
└─ package-lock.json // Liste des packages npm du projets

```  

### Documentation

- Laravel 10.0 : https://laravel.com/docs/9.x
- MySQL : https://dev.mysql.com/doc/
- PHP 8.1 : https://www.php.net/manual/fr/migration81.new-features.php
- Composer : https://getcomposer.org/doc/
- Git : https://git-scm.com/doc
- PHPStorm : https://www.jetbrains.com/help/phpstorm/
- PhpMyAdmin : https://docs.phpmyadmin.net/en/latest/

### Contribution

- Attitso Joel (Designer | dev Fullstack)
