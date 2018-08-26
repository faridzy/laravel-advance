#Application Structure
<p>Administrator folder for backend procces.
<p>Frontend folder for frontend proccess.
<p>Helpers folder for functional class when your app need.
<p>common folder for config your app and folder sharing.

#Installation
**composer install

**run -> php -r "file_exists('.env') || copy('.env.example', 'Frontend/.env');"

**run -> php -r "file_exists('.env') || copy('.env.example', 'Administrator/.env');"

**run -> php artisan key:generate

**run -> php admartisan key:generate