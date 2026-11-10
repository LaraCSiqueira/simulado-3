<?php

use App\Livewire\Login;
use App\Livewire\Produto\ProdutoCreate;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class);

// PRODUTO
Route::get('/produto/create', ProdutoCreate::class)->name('produto'); 



