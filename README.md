# Goal Tracker
Goal tracking application with milestones, progress tracking, REST API and Echo Show Skill

While this challenge would have been pretty easy for me to do in CodeIgniter, it would have only proved I know older technologies. I decided instead to use this as an opportunity to learn some new things that I have been wanting to spend some time with.

## Technologies to be used
### Coding
- Laravel - [Cheatsheet](laravel.md)
  - Laravel migrations
  - Blade templates
  - Eloquent ORM
- Vue.js is installed by default but will probably try React.js instead.
- Alexa skills for the Echo Show 
- Node.js for Alexa code
### Hosting
- AWS Lambda - for skill code
- AWS Lightsail or Elastic Beanstalk for site

Task List
- [ ] Database Schema
- [ ] Seeding for testing
- [ ] CRUD Goals
- [ ] CRUD Milestones
- [ ] CRUD Progress
- [ ] CRUD Goal Types
- [ ] Create skill to set up goals


# Install instructions
- git clone this repo
- Composer install
- npm install
- php artisan key:generate  // This sets APP_KEY in the .env file
- update .env file with your db settings
- 
