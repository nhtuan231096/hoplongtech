<?php 
// route banner
Route::get('slider','SliderController@index')->name('slider');
Route::post('slider','SliderController@addSlider')->name('slider');
Route::get('delele-slider/{id}','SliderController@delSlider')->name('delSlider');
Route::get('edit-slider/{id}','SliderController@editSlider')->name('editSlider');
 ?>