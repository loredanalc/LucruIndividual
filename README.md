# LUCRUL INDIVIDUAL FRAMEWORK

## Autorii proiectului
- Cotorobai Loredana

## Descrierea proiectului
Acest proiect reprezintă o aplicație web de gestionare a postărilor de blog, realizată cu Laravel 10. Aplicația include un sistem de autentificare și autorizare a utilizatorilor, care permite gestionarea postărilor și categoriilor de blog. Utilizatorii pot crea, citi, actualiza și șterge postări și categorii. Aplicația este construită pe arhitectura MVC (Model-View-Controller) și este ușor de extins.

### Funcții principale:
- Autentificare și autorizare a utilizatorilor.
- Crearea, citirea, actualizarea și ștergerea postărilor și categoriilor.s
- Sistem de validare a datelor de intrare.
- Interfață simplă și intuitivă pentru gestionarea postărilor și categoriilor.
- Protecție CSRF și validare a datelor pentru a preveni atacurile comune.

## Instrucțiuni de instalare și pornire
Pentru a instala și rula aplicația local, urmați pașii de mai jos:

### 1. Clonați repo-ul
Clonați proiectul pe mașina locală utilizând comanda:
```bash
git clone https://github.com/loredanalc/LucruIndividual.git
```
### 2. Instalați dependențele
Navigați în directorul proiectului și rulați următoarele comenzi pentru a instala dependențele:
```bash
cd proiectul-tau 
composer install 
npm install
```
### 3. Configurați fișierul `.env`
Copiați fișierul `.env.example` și redenumiți-l în `.env`. Apoi, configurați conexiunea la baza de date și alte variabile de mediu:
```bash
cp .env.example .env
```
### 4. Generează cheia aplicației
Rulați comanda pentru a genera cheia aplicației:
```bash
php artisan key:generate
```
### 5. Rulați migrațiile
Aplicația utilizează o bază de date pentru stocarea datelor. Rulați migrațiile pentru a crea tabelele necesare:
```bash
php artisan migrate
```
### 6. Lansați serverul
Porniți serverul de dezvoltare integrat în Laravel:
```bash
php artisan serve
```
## Exemple de utilizare

### Crearea unui post:

1.  Autentificați-vă în aplicație cu un cont de utilizator.
2.  Accesați pagina de creare a postării (`/posts/create`).
3.  Completați titlul și conținutul postării și selectați o categorie existentă.
4.  Salvați postarea, care va apărea pe pagina principală a postărilor.

### Vizualizarea postărilor:

Accesați pagina principală a postărilor (`/posts`) pentru a vizualiza toate postările publicate.

### Editarea unui post:

1.  Navigați la pagina postării și faceți clic pe "Edit".
2.  Modificați titlul și conținutul postării și salvați modificările.

### Ștergerea unui post:

Accesați pagina postării și faceți clic pe "Delete" pentru a șterge postarea respectivă.

## Capturi de ecran

```bash
web.php
```
![alt text](/poze/code-snapshot1.png)

```bash
PostController
```
![alt text](/poze/code-snapshot2.png)

```bash
CategoryController
```
![alt text](/poze/code-snapshot3.png)

## Lista surselor utilizate:

-   [Laravel Documentation](https://laravel.com/docs/10.x)
-   [Tailwind CSS](https://tailwindcss.com/)
-   [Font Awesome](https://fontawesome.com/)
-   [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)

## Alte aspecte semnificative:

-   Aplicația utilizează Laravel Breeze pentru implementarea autentificării și interfeței de bază.
-   Funcționalitățile de CRUD pentru postări și categorii sunt implementate folosind controlere și modele Laravel.
-   Aplicația este protejată împotriva atacurilor CSRF, iar toate cererile POST sunt verificate pentru a preveni modificarea neautorizată a datelor.
