<?php 
// route tin tức
Route::get('admin/news','NewsController@index')->name('news');
Route::get('admin/add-news','NewsController@addNews')->name('addNews');
Route::post('admin/add-news','NewsController@postAddNews')->name('addNews');
Route::get('admin/edit-news/{id}','NewsController@editNews')->name('editNews');
Route::post('admin/edit-news/{id}','NewsController@postEditNews')->name('editNews');
Route::get('admin/delete-news/{id}','NewsController@deleteNews')->name('deleteNews');

// route danh mục tin tức
Route::get('admin/news-category','NewsController@news_category')->name('news_category');
Route::post('admin/news-category','NewsController@post_news_category')->name('news_category');
Route::get('admin/delete-news-category/{id}','NewsController@deleteCate')->name('deleteCate');
Route::get('admin/edit-news-category/{id}','NewsController@editCate')->name('editCate');
Route::post('admin/edit-news-category/{id}','NewsController@postEditCate')->name('editCate');
 ?>