<?php

use App\Livewire\Auth\Login;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');
Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('/produto/edit{id}', ProdutoEdit::class)->name('produto.edit');
Route::get('/produto/listar', ProdutoIndex::class)->name('produto.index');
