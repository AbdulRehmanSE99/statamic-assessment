<?php

use Illuminate\Support\Facades\Route;

// Redirect /blogs to /blogs-list
Route::redirect('/blogs', '/blogs-list', 301);

