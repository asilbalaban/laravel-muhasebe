<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('test', function(){
//    $invoice = new \App\Invoices;
//    $invoice->name = 'İlk fatura';
//    $invoice->is_sale = true;
//    $invoice->invoice_type = 1;
//    $invoice->invoice_date = date("Y-m-d");
//    $invoice->save();
    
    echo '<pre>';
    print_r(\App\Invoices::find(1));
    echo '</pre>';
    
});
