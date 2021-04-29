<?php

use Illuminate\Support\Facades\Route;

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

/*

Thank you so much for a shot at the position, this task has made me realise that I need more training for PHP and react

*/

Route::get('/', function () {
	 
	$fh = fopen("..//routes//SampleImport.csv", "r"); 
	
	$myfile = fopen("..//routes//SampleImport.csv", "r") or die("Unable to open file!");
	$myData =  fread($myfile,filesize("..//routes//SampleImport.csv"));
	fclose($myfile); 
	return $myData;	
	
});

Route::get('/test', function () {
	 
	$fh = fopen("..//routes//SampleImport.csv", "r"); 
	 
	return 'Test';
});

