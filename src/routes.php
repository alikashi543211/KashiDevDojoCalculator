<?php

// use Illuminate\Routing\Route;

Route::get('k-calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('k-add/{a}/{b}', 'KashiDevdojo\Calculator\CalculatorController@add');
Route::get('k-subtract/{a}/{b}', 'KashiDevdojo\Calculator\CalculatorController@subtract');
