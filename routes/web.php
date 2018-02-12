<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Routes Auth
Auth::routes();

Route::get('/test', 'TestController@ontest');

// Routes Front
Route::group(['namespace' => 'Front'], function() {

  // Route page accueil avec affichage 'articles / posts / infos des admins'
  Route::get('/', 'HomeController@index')->name('home');

  // Routes mentions legales et utilisation
  Route::get('/mentions-legales', 'HomeController@mentions')->name('mentions');
  Route::get('/conditions-utilisation', 'HomeController@conditions')->name('conditions');

  // Route profil public producteur
  Route::get('/profil/{name}', 'ProducerController@showProfilProducer')->name('profil-public');  // avec 'name' en parametre

  // Routes profil editable producteur
  Route::get('/profil/{name}', 'ProducerProfilController@showEditProfilProducer')->name('edit-profil-view'); // avec 'name' en parametre
  Route::put('/profil/{name}', 'ProducerProfilController@actionEditProfilProducer')->name('edit-profil-action'); // avec 'name' en parametre

  // Routes profil création producteur
  Route::get('/profil/creer-un-profil', 'ProducerProfilController@showNewProfilProducer')->name('new-profil-view');
  Route::post('/profil/creer-un-profil', 'ProducerProfilController@actionNewProfilProducer')->name('new-profil-action');

  //Route resultat de recherche
  Route::get('/recherche', 'SearchController@actionSearchForm')->name('search-result');

  //Routes contact
  Route::get('/contact', 'ContactController@showFormContact')->name('contact-view');
  Route::post('/contact', 'ContactController@actionFormContact')->name('contact-action');

});

////////////////////////////////////////////////////////////////////
////////////////===============LA SUITE==============///////////////
////////////////////////////////////////////////////////////////////


//Routes Admin
Route::group(['namespace' => 'Admin'], function() {

  //Route page accueil dashboard
  Route::get('/awesome-admin', 'AdminDashboardController@dashboard')->name('dashboard');


//////
//
  //Route listing items
  Route::get('/admin/list-items', 'AdminItemController@showListItems')->name('admin-list-item');

  //Route ajout nouvel item
  Route::get('/admin/new-item', 'AdminItemController@showNewItem')->name('admin-new-item-view');
  Route::post('/admin/new-item', 'AdminItemController@actionNewItem')->name('admin-new-item-action');

  //Route update item
  Route::get('/admin/edit-item/{id}', 'AdminItemController@showEditItem')->name('admin-edit-item');
  Route::put('/admin/edit-item/{id}', 'AdminItemController@actionEditItem')->name('admin-edit-item');

  // Route suppression item
  Route::delete('/admin/delete-item/{id}', 'AdminItemController@deleteItem')->name('admin-delete-item');
//
//////


//////
//
  //Route listing retails
  Route::get('/admin/list-retails', 'AdminRetailController@showListRetails')->name('admin-list-retail');

  //Route ajout retail
  Route::get('/admin/new-retail', 'AdminRetailController@showNewItem')->name('admin-new-item-view');
  Route::post('/admin/new-retail', 'AdminRetailController@actionNewItem')->name('admin-new-item-action');

  // Route update retail
  Route::get('/admin/edit-retail/{id}', 'AdminRetailController@showEditRetail')->name('admin-edit-retail');
  Route::put('/admin/edit-retail/{id}', 'AdminRetailController@actionEditRetail')->name('admin-edit-retail');

  //Route supp retail
  Route::delete('/admin/delete-retail/{id}', 'AdminRetailController@deleteRetail')->name('admin-delete-retail');
//
//////


//////
//
  //Route listing categories
  Route::get('/admin/list-categories', 'AdminCategoryController@showListCategories')->name('admin-list-category');

  //Route ajout nouvelle categorie
  Route::get('/admin/new-category', 'AdminCategoryController@showNewCategory')->name('admin-new-item-view');
  Route::post('/admin/new-category', 'AdminCategoryController@actionNewCategory')->name('admin-new-item-action');

  //Route update categorie
  Route::get('/admin/edit-category/{id}', 'AdminCategoryController@showEditCategory')->name('admin-edit-category');
  Route::put('/admin/edit-category/{id}', 'AdminCategoryController@actionEditCategory')->name('admin-edit-category');

  //Route supp categorie
  Route::delete('/admin/delete-category/{id}', 'AdminCategoryController@deleteCategory')->name('admin-delete-category');
//
//////


//////
//
  //Route listing Producer
  Route::get('/admin/list-producers', 'AdminProducerController@showListProducers')->name('admin-list-producer');

  //Route ajout Producer
  Route::get('/admin/new-producer', 'AdminProducerController@newProducer')->name('admin-new-producer-view');
  Route::post('/admin/new-producer', 'AdminProducerController@newProducerAction')->name('admin-new-producer-action');

  //Route update producer
  Route::get('/admin/edit-producer/{id}', 'AdminProducerController@showEditProducer')->name('admin-edit-producer');
  Route::put('/admin/edit-producer/{id}', 'AdminProducerController@actionEditProducer')->name('admin-edit-producer');

  //Route supp producer
  Route::delete('/admin/delete-producer/{id}', 'AdminProducerController@deleteProducer')->name('admin-delete-producer');
//
//////


//////
//
  //Route listing articles
  Route::get('/admin/list-article', 'AdminArticleController@showListArticles')->name('admin-list-article');

  //Route ajout article
  Route::get('/admin/new-article', 'AdminArticleController@newArticle')->name('admin-new-article-view');
  Route::post('/admin/new-article', 'AdminArticleController@newArticleAction')->name('admin-new-article-action');

  //Route update article
  Route::get('/admin/edit-article', 'AdminArticleController@showEditArticle')->name('admin-edit-article');
  Route::put('/admin/edit-article', 'AdminArticleController@actionEditArticle')->name('admin-edit-article');

  //Route supp article
  Route::delete('/admin/delete-article', 'AdminArticleController@deleteArticle')->name('admin-delete-article');
//
//////

});
