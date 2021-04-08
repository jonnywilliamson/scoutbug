<?php

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;


Route::get('/search', function () {
    return Article::search('Yellow')->paginate(4);
});


Route::get('/scopesearch', function () {
    return Article::search('Yellow')
        ->query(function(Builder $query){
            return $query->groupTwo();
        })
        ->paginate(4);
});
