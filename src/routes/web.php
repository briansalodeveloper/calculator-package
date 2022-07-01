<?php

use test\test;

Route::get('/calculator', function(){
    return view('calculate::calculate');
});

Route::get('/test', [test::class, 'calculateData']);