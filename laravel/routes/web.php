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

Route::get('/', function () {
	 
	$fh = fopen("..//routes//SampleImport.csv", "r");
	//..//routes//SampleImport.csv"
	//Setup a PHP array to hold our CSV rows.
	
	$myfile = fopen("..//routes//SampleImport.csv", "r") or die("Unable to open file!");
	$myData =  fread($myfile,filesize("..//routes//SampleImport.csv"));
	fclose($myfile); 
	return $myData;	
	
});

Route::get('/test', function () {
	 
	$fh = fopen("..//routes//SampleImport.csv", "r");
	//..//routes//SampleImport.csv"
	//Setup a PHP array to hold our CSV rows.
	 
	return 'Test';
});

