<?php

/* 3. http://XXXXXX.jp/XXX  => AAAControllerのbbb */
Route::group(['prefix' => 'admin'], function() {
  Route::get('/xxx', 'Admin\AAAController@bbb');
});

/* 4. 応用】 前章でAdmin/ProfileControllerを作成し、
add Action, edit Actionを追加しました。web.phpを編集して、
admin/profile/create にアクセスしたら ProfileController の
add Action に、admin/profile/edit にアクセスしたら 
ProfileController の edit Action に割り当てるように設定して
ください。        */
Route::group(['prefix' => 'admin'], function() {
  Route::get('news/profile/create', 'Admin\ProfileController@add');
  Route::get('news/profile/edit', 'Admin\ProfileController@edit');
});

