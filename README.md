Prerequisites
PHP 7.4 or higher
Composer (Dependency Manager for PHP)
Laravel Framework
Installation
Clone the repository:

Copy
git clone https://github.com/Jacktone-wambui/laravel--Formupload-system.git
Navigate to the project directory:

Copy
cd Formupload
Install the project dependencies: start with laravel breeze and use blade with alpine

Copy
composer install
Create a copy of the .env.example file and rename it to .env. Update the necessary configurations such as the database connection details and any other environment variables.

Copy
cp .env.example .env
Generate the application key:

Copy
php artisan key:generate
Run the database migrations and seed the initial data (if applicable):

Copy
php artisan migrate --seed
Start the development server:

Copy
php artisan serve
Access the application in your web browser at http://localhost:8000 or the specified URL.

Usage
Create Tasks
Open the web application in your browser.

Login to the webapp.

Navigate to the "Tasks" section.

Click on the "Create Task" button.

Fill in the required details for the task, such as title, description, upload image, etc.

Click on the "add task" button to create the task.