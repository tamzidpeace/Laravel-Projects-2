<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/autocomplete', 'AutocompleteController@index');
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');

Route::get('/dropdown', 'AutocompleteController@dropdown');
Route::get('/getStates/{id}', 'AutocompleteController@getStates')->name('state');


// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('moderncombat5bd@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });

Route::get('send-mail','MailSend@mailsend');

Route::POST('/payment', 'PaymentController@store')->name('stripe.store');

