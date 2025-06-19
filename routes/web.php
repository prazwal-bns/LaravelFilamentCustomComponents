<?php

use App\Components\TextInput;
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
    $input = TextInput::make('email')
            ->label('Email Address');

    return view('demo',[
        'input' => $input
    ]);
});

Route::get('/', function () {
    return view('welcome');
});
