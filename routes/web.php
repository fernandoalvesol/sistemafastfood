<?php

//****ROTAS DO PAINEL****//


//****ROTAS DO SITE******//

Route::get('/', 'Site\SiteController@index' )->name('/');


//***ROTAS DE CLIENTES****//
Route::get('/cli01', 'Site\SiteController@cli01')->name('cli01');



