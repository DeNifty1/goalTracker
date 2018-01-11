# Goal Tracker
Goal tracking application with milestones, progress tracking, ReactJS, REST API and Echo Show Skill

Project to learn some new things that I have been wanting to spend some time with.

## Technologies to be used
### Coding
- Laravel - [Cheatsheet](laravel.md)
  - Laravel migrations
  - Blade templates
  - Eloquent ORM
- React.js even though Vue.js is installed by default
- Alexa skills for the Echo Show 
- Node.js for Alexa code
### Hosting
- AWS Lambda - for skill code
- AWS Lightsail or Elastic Beanstalk for site

Task List
- [ ] Database Schema
- [ ] Seeding for testing
- [ ] Goals REST calls
- [ ] Milestones REST calls 
- [ ] Progress REST calls 
- [ ] Goal Types REST calls 
- [ ] Create Front End with React
- [ ] Create skill to set up goals


# Install instructions
- git clone this repo
- Composer install
- npm install
- php artisan key:generate  // This sets APP_KEY in the .env file
- update .env file with your db settings
- php artisan migrate
- php artisan db:seed
