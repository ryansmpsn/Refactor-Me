# A Laravel 6.0 Application with a Few Refactoring Exercises

## Installation
For the exercise, fork the repo and pull it in locally. Then:
```
composer install
npm install && npm run dev
mv .env.example .env
touch database/database.sqlite
php artisan migrate
php artisan serve
```

## Objective
There are a couple of controllers and models as well as routes in web.php and a handful of Blade files. Using your knowledge of Laravel and good practices, refactor them to more closely follow idiomatic Laravel.

### Areas to examine
*  App\Controllers\UserProfileController.php
*  App\User.php
*  App\UserProfile.php
*  routes\web.php
*  views\home.blade.php
*  views\profile\*

### Feature Request
Once you have refactored, add a feature to allow users to upload a photo/avatar for their profile. Users without an avatar should have a placeholder of some kind. Bonus points for using Bootstrap to make the user profile and image look nice.

### Hints
*  Use what the framework provides. 
*  It's OK to add in order to subtract.
*  Extracing methods in a controller is an anti-pattern.
*  I didn't see any tests. Tests are usually a good idea.

## NO PR's
Please do not PR this repository. It is meant as a learning playground for you to explore on your own. It is perfect just the way it is. If you have ideas for more exercies to build into the app, open an issue.
