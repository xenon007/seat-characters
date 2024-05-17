<?php

use Seat\Web\Models\User;

// Добавляем новый пункт меню Characters
Route::get('/characters', function () {
    $users = User::all();
    return view('characters', compact('users'));
})->name('characters.list');

// Создаем представление characters.blade.php
// В этом файле будет таблица с персонажами и их статусами