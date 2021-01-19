<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Propertywebmasters\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Propertywebmasters\Calculator\CalculatorController@subtract');
