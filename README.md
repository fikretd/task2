# task2
This project is a recruitment task.

User gives a date range and uses import button to import images from Nasa's Mars Rover Photos api. This action creates an api request job for each day in this range and adds it to the queue. If the images for given date is already imported, then this job will not be executed and it will set the job status to done.

User also can use the flush button to kill all jobs and clear all images that previously imported.

# Installation
- clone this repo
- cd to project folder
- composer install
- Create database and edit .env file
- php artisan migrate
- php artisan serve to start app on http://localhost:8000
- php artisan queue:listen to listen jobs in queue 

