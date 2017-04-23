<?php
/*
	Web Routes for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com)
*/

//////////////////////////// Home Routes ////////////////////////////
Route::get('/', 'HomeController@index');
Route::get('/form', 'HomeController@getForm');


//////////////////////////// Class Routes ////////////////////////////
Route::group(['prefix' => 'class'], function () {
	Route::get('', 'ClassroomController@getList')->name('classes');
	Route::get('create', 'ClassroomController@getCreate')->name('createClass');
	Route::post('create', 'ClassroomController@postEdit')->name('createClass-post');
	Route::group(['prefix' => '{classroom}'], function () {
		Route::get('', 'ClassroomController@getClass')->name('class');
		Route::get('edit', 'ClassroomController@getEdit')->name('editClass');
		Route::post('edit', 'ClassroomController@postEdit')->name('editClass-post');
	});
	
	//////////////////////////// Q&A Routes ////////////////////////////
	Route::group(['prefix' => '{classroom}/QA'], function () {
		Route::get('', 'QAController@getList')->name('QA');
		Route::get('new', 'QAController@getCreate')->name('QA-create');
		Route::post('new', 'QAController@postCreate')->name('QA-create-post');
		Route::group(['prefix' => '{question}'], function () {
			Route::get('', 'QAController@getThread')->name('QA-thread');
			Route::get('delete', 'QAController@getDeleteThread')->name('QA-thread-delete');
			Route::group(['prefix' => '{answer}'], function () {
				Route::get('edit', 'QAController@getEdit')->name('QA-edit');
				Route::post('edit', 'QAController@postEdit')->name('QA-edit-post');
				Route::get('delete', 'QAController@getDeleteAnswer')->name('QA-post-delete');
			});
		});
	});
});


//////////////////////////// Auth Routes ////////////////////////////
Auth::routes();
Route::get('/logout', 'HomeController@getLogout');