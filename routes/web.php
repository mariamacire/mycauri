<?php

use App\NewsLetter;
use App\Pays;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('index', 'ContactController@index');

Route::get('contact', 'ContactController@contact');

Route::post('send', 'ContactController@store');

Route::get('about', 'ContactController@about');

Route::get('service', 'ContactController@service');

Route::get('transfer', 'ContactController@transfer');

Route::get('wallet', 'ContactController@wallet');

Route::get('pay', 'ContactController@pay');

Route::get('shop', 'ContactController@shop');

Route::get('express', 'ContactController@express');

Route::post('newsletter', 'NewsletterController@store');

Route::get('transfert', 'ContactController@transfert');

Route::get('wallets', 'ContactController@wallets');
    
Route::get('paye', 'ContactController@paye');

Route::get('shops', 'ContactController@shops');
    
Route::get('expressfaq', 'ContactController@expressfaq');

Route::get('agence' , 'AgencesController@index');

Route::get('partenaires/{C_Country_ID}' , 'AgencesController@getPartenaires');
Route::get('agences/{C_Country_ID}/{partenaireID}' , 'AgencesController@getAgences');




