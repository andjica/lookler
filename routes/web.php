<?php
use App\User;

Route::get('/download-pdf', function()
{
  $pdf = PDF::loadView('pdf.resumepdf');
  return $pdf->download('resume.pdf');
});


Route::middleware(['verified'])->group(function () { // Must be verified to see this page
  Route::get('/', 'FrontController@index')->name("home");

  //User profile
  Route::get('/{user}/user', 'FrontController@user')->name("user-page");
  Route::get('/{user}/profile', 'FrontController@profile')->name("user-profile-page");

  //User settings
  Route::get('/your-card-preview', 'FrontController@cardPreview'); //route for user to see his own card
  Route::get('/user-settings', 'FrontController@settings')->name("settings-page");
  Route::get('/edit-personal-information', 'UserController@editInfo'); //show form for editing info
  Route::post('/edit-information', 'UserController@update'); //edit the user
  Route::post('/edit-resume', 'UserController@updateResume');
  Route::post('/edit-education', 'UserController@updateSchool');
  
  //User followers
  Route::post('/follow', 'UserController@follow');
  Route::get('{id}/user-following', 'FrontController@following');
  Route::get('{id}/user-followers', 'FrontController@followers');

  //Skills search, deleting adding
  Route::get('/skills-search/{skill}', 'SkillsController@search');
  Route::post('/add-skill', 'SkillsController@add');
  Route::post('/skill-delete', 'SkillsController@detach');

  //Search
  Route::post('/search', 'FrontController@search');

});

Route::post('/authenticate', 'Auth\LoginController@authenticate');
Auth::routes(['verify' => true]);
