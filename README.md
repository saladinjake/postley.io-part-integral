

>   Developer Challenge 1  and 2

## BUILD A FULLSTACK FINISHED PRODUCT: IMage Uploader
This repository contains:

### Project Overview Task

Objective
Your assignment is to implement an image storage using Laravel and VueJS/Javascript.


## Table of Contents

- [Background](#background)
- [Features (UI)](###Features)
- [Usage](#usage)



- [License](#license)

## Background
 - Brief
 Posted authentication and page analytics view using facebook api.
 Tasks
 - Implement assignment using
 - Language: PHP, Javascript
 - Framework: Laravel,  js



 ### Features
 - [Authentication required locally]
 - [Authentication required via facebook auth]
 - [Create a view that will,]
     * Let users see their page analytics.




### Endpoints Features (API)
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::namespace('Authenticator')->group(function () {
  -  Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');: local login form
  -  Route::get('/login/facebook',  [LoginController::class, 'redirectToFacebookProvider'] );: facebook auth
  -  Route::get('login/facebook/callback/',  [LoginController::class, 'handleProviderFacebookCallback']);: facebook auth handler callback
  -  Route::post('/login',[LoginController::class, 'login']); : local login checkmate
  -  Route::post('/logout',  [LoginController::class, 'logout'])->name('logout'); : logout
  -  Route::get('register', [RegisterController::class, 'showRegistrationForm'] )->name('register'); : local register form
  -  Route::post('register', [RegisterController::class, 'create'] ); : local register checkmate
    // Route::get('/verify/{token}', 'RegisterController@verifyEmail')->name('verify');  : not required
    // // Password Reset Routes... this was not requsted
  -  Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'] )->name('password.request'); : not required
  -  Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'] )->name('password.email'); : not required
  -  Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'] )->name('password.reset'); : not required
  -  Route::post('password/reset',  [ResetPasswordController::class, 'reset']);: not required
// });


Route::group(['middleware' => ['auth']], function(){
    Route::get('/user/profile', [FbpostController::class,'getUserProfile']);: gets your profile data
    Route::get('/user/company/metadata', [FbpostController::class,'fetchPageMetaData']);: feeds analytics of your biz page

});



## Usage PHP
- run the command composer install    - to install laravel packages
- php artisan serve
- enjoy and prosper

## License

[MIT](LICENSE) © Juwa Victor Aka SALADINJAKE
- ensure to have php 7 mysql server composer installed on your local pc
- run composer install
- download ngrok and place it in the root folder of your laravel project inside another folder eg myngrokFolder/ngrok-binary file
- open 2 terminals and  navigate to the laravel project root then run php artisan serve --port=8080 on one terminals
- on the second terminal navigate to the ngrok folder inside the laravel project and run ngrok http 8080
- since face book request that u need ssl to get passed it authentication process,
- ngrok will print out some generated url to the screen for you. we are much more concerned with the https link spitted out to the screen
- copy the https link gotten from ngrok and head over to your facebook developer page
- Ensure to create an app then copy the client id and secrete id.
- head over to your env file and fill the record below with your own record
- NGROK_URL=YOUR_HTTPS_LINK_FOR_NGROK
- FB_APP_ID= YOUR_FB_APP_ID
- FB_APP_SEC=YOUR_FB_SECRETE_ID
- FB_LOOP_BACK=YOUR_HTTPS_LINK_FOR_NGROK/login/facebook/callback/
- FACEBOOK_APP_ID= YOUR_FB_APP_ID
- FACEBOOK_APP_SECRET= YOUR_FB_SECRETE_ID
- FB_USER_ACCESS_TOKEN= YOUR_ACCESS_TOKEN # THIS IS NOT REQUIRED
- FB_PAGE_ACCESS_TOKEN= # THIS IS NOT REQUIRED


- You should set your facebook login package in your facebook app settings already and place the callback url with that of your ngroks https url emitted.
- test all the routes and enjoy
