[< Back to ReadMe](README.md)
# Laravel Info
### Models
- Directory: `app`
### Views
- Directory: `resources/Views`
- Uses Blade template engine
### Controllers
- Directory: `app/Http/Controllers`
- To pass a value from controller:
```
$title= "my Title";
return view('pages.index', compact('title'));
OR
return view('pages.index')->with('title', $title); // in template view this can be refered to with {{$title}} OR <?php echo $title ?>
```
- To pass multiple values from controller	
```
$data = array(
  'title' => 'myTitle',
  'goals' -> ['start', 'finish']
);
return view('pages.index')->with($data);  // bit like CI
```
### Routes
- Directory: routes folder (web.php default of your routes)
- web.php - default file for all your routes
- Examples:
```php
Route::get('/', function () {
  //return view('welcome');
  //return 'Hello';
  return view('pages.about'); // grabs about.blade.php template from resources/views/pages directory
});
Route::get('/user/{id}', function ($id) {
  return $id; 
});
// To get a route to point to a controller:
Route::get('/','GoalsController@index');
// Creates a route for each method in the controller
Route::resource('goals', 'GoalsController');
```
# Artisan
- `php artisan key:generate` - Generate Key 
- `php artisan list` - List of Artisan commands
- `php artisan route:list` - List of all routes
- `php artisan -V` - Laravel Version
- `php artisan make:controller GoalController --resource --model=Goal`
  - Creates Controller named `GoalController`
  - `--resource` - creates empty functions for db 
  - `-model` - adds Goal model to controller 
- `php artisan make:model Goal -m`
  -`-m` is to setup a migration
  - Migration file is created in `database/migrations/`
- `php artisan migrate` - Runs migration files and puts records in migration table to show it is complete
- `php artisan make:seeder GoalsTableSeeder` - Creates a file to allow the seeding of the db
- `php artisan db:seed --class=GoalsTableSeeder` - Runs the seeder code from GoalsTableSeeder.php

# Eloquent
```
$goals = Goal::all();
$goals = Goal::find($id);
$goals = Goal::where('goalName', 'Lose 10 pounds')->get();
$goals = Goal::orderBy('goalName', 'asc')->get(); //like all with sorting
$goals = Goal::orderBy('goalName', 'asc')->take(1)->get(); //like all with sorting and limit to 1
	
// Pagination
$goals = Goal::orderBy('goalName', 'asc')->paginate(1); //like all with sorting and 1 record per page
// in the view add
{{$goals->links()}}


//To use straight SQL
use DB; //Add the db library
$goals = DB::select('SELECT * from goals'); //$goals = Goal::all();
```

# Blade Syntax
```
@if (count($goals) > 0)
  <ul>
    @foreach($goals as $goal)
      <li>{{$goal}}</li>
    @endforeach
  </ul>
@endif
```
# Working with JS/CSS
- getting a stylesheet from assets
`<link rel="stylesheet" href="{{asset('css/app.css')}}">`
- minified code comes from resources->assets->sass|js

## In order to use sass and compile css run:
- npm install
- npm run dev or prod
- npm run watch ...keeps it building
> info on this is in package.json
