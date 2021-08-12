<p align="center"><a href="#" target="_blank" style ="color : green; font-size : 50px">Ministry of Health and Child Care...MoHCCC DPHS System</a></p>

 ## PREREQUISITES
   1) XAMPP
   2) Composer 
 ## Instructions
 
 1) Run git clone <link>- inside your htdocs folder in xampp
 2) Run composer install - this will install all the dependancies for the project
 3) Run cp .env.example .env -- this will copy and create .env file for your project
 4) Run php artisan key:generate -generates a new key for the project
 5) Run php artisan migrate --migrate tables into the database
 6) Run php artisan serve -- start the server
 7) Go to link localhost:8000--access the system
 
## Access rights
After accessing the landing page, the user has to create an account as a doctor or as a patient
