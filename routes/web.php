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

  // Route listing producteurs
  Route::get('/nos-producteurs', 'ProducerController@showAllProducers')->name('list-producer');

  // Route listing items
  Route::get('/nos-produits', 'CategoryController@showAllCategories')->name('list-item');

  // Route profil public producteur
  Route::get('/profil/{slug}', 'ProducerController@showProfilProducer')->name('profil-public');  // avec 'slug' en parametre

  // Route profil perso producteur
  Route::get('/mon-profil', 'ProducerController@showProfilPersoProducer')->name('profil-perso');// Ajout bastien

  // Routes profil editable producteur
  Route::get('/modifier-mon-profil/{slug}', 'ProducerProfilController@showEditProfilProducer')->name('edit-profil-view'); // avec 'slug' en parametre
  Route::put('/modifier-mon-profil/{id}', 'ProducerProfilController@actionEditProfilProducer')->name('edit-profil-action'); // avec 'slug' en parametre

  //Routes profil producteur de modif items
  Route::put('/modifier-produit/{id}', 'ProducerProfilController@actionEditItemProfilProducer')->name('edit-item-profil-action');
  Route::delete('/supprimer-produit/{id}', 'ProducerProfilController@actionDeleteItemProfilProducer')->name('delete-item-profil-action');

  //Routes profil producteur de modif retails
  Route::put('/modifier-lieu/{id}', 'ProducerProfilController@actionEditRetailProfilProducer')->name('edit-retail-profil-action');
  Route::delete('/supprimer-lieu/{id}', 'ProducerProfilController@actionDeleteRetailProfilProducer')->name('delete-retail-profil-action');

  // Routes profil création producteur
  Route::get('/creer-un-profil', 'ProducerProfilController@showNewProfilProducer')->name('new-profil-view');
  Route::post('/creer-un-profil', 'ProducerProfilController@actionNewProfilProducer')->name('new-profil-action');

  //Routes resultats de recherche
  Route::get('/recherche', 'SearchController@actionSearchForm')->name('search-result');
  Route::get('/recherche/{zone}', 'SearchController@actionSearchMap')->name('search-result-map');

  //Routes contact
  Route::get('/contact', 'ContactController@showFormContact')->name('contact-view');
  Route::post('/contact', 'ContactController@actionFormContact')->name('contact-action');

});


//Routes Ajax
  Route::group(['namespace' => 'Ajax', 'middleware' => ['auth', 'ajax']], function() {

    Route::post('/mon-profil/ajax/add-item', 'AjaxController@addItem')->name('add-item');
    Route::post('/mon-profil/ajax/add-retail', 'AjaxController@addRetail')->name('add-retail');

  });


////////////////////////////////////////////////////////////////////
////////////////===============LA SUITE==============///////////////
////////////////////////////////////////////////////////////////////


//Routes Admin
  Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function() {

  //Route page accueil dashboard
  Route::get('/admin', 'AdminDashboardController@dashboard')->name('dashboard');


//////
//
  //Route listing items
  Route::get('/admin/list-items', 'AdminItemController@showListItems')->name('admin-list-item');

  //Route ajout nouvel item
  Route::get('/admin/new-item', 'AdminItemController@showNewItem')->name('admin-new-item-view');
  Route::post('/admin/new-item', 'AdminItemController@actionNewItem')->name('admin-new-item-action');

  //Route update item
  Route::get('/admin/edit-item/{id}', 'AdminItemController@showEditItem')->where('id','[0-9]+')->name('admin-edit-item-view');
  Route::put('/admin/edit-item/{id}', 'AdminItemController@actionEditItem')->name('admin-edit-item-action');

  // Route suppression item
  Route::delete('/admin/delete-item/{id}', 'AdminItemController@deleteItem')->name('admin-delete-item');
//
//////

////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////
//
  //Route listing retails
  Route::get('/admin/list-retails', 'AdminRetailController@showListRetails')->name('admin-list-retail');

  //Route ajout retail
  Route::get('/admin/new-retail', 'AdminRetailController@showNewRetail')->name('admin-new-retail-view');
  Route::post('/admin/new-retail', 'AdminRetailController@actionNewRetail')->name('admin-new-retail-action');

  // Route update retail
  Route::get('/admin/edit-retail/{id}', 'AdminRetailController@showEditRetail')->where('id','[0-9]+')->name('admin-edit-retail-view');
  Route::put('/admin/edit-retail/{id}', 'AdminRetailController@actionEditRetail')->name('admin-edit-retail-action');

  //Route supp retail
  Route::delete('/admin/delete-retail/{id}', 'AdminRetailController@deleteRetail')->name('admin-delete-retail');
//
//////

////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////
//
  //Route listing categories
  Route::get('/admin/list-categories', 'AdminCategoryController@showListCategories')->name('admin-list-category');

  //Route ajout nouvelle categorie
  Route::get('/admin/new-category', 'AdminCategoryController@showNewCategory')->name('admin-new-category-view');
  Route::post('/admin/new-category', 'AdminCategoryController@actionNewCategory')->name('admin-new-category-action');

  //Route update categorie
  Route::get('/admin/edit-category/{id}', 'AdminCategoryController@showEditCategory')->where('id','[0-9]+')->name('admin-edit-category-view');
  Route::put('/admin/edit-category/{id}', 'AdminCategoryController@actionEditCategory')->name('admin-edit-category-action');

  //Route supp categorie
  Route::delete('/admin/delete-category/{id}', 'AdminCategoryController@deleteCategory')->name('admin-delete-category');
//
//////


//////
//
  //Route listing Producer
  Route::get('/admin/list-producers', 'AdminProducerController@showListProducers')->name('admin-list-producer');

  //Route profil single Producer
  Route::get('/admin/profil-producer/{id}', 'AdminProducerController@showProfilProducer')->where('id','[0-9]+')->name('admin-profil-producer');

  //Route ajout Producer
  Route::get('/admin/new-producer', 'AdminProducerController@showNewProducer')->name('admin-new-producer-view');
  Route::post('/admin/new-producer', 'AdminProducerController@actionNewProducer')->name('admin-new-producer-action');

  //Route update producer
  Route::get('/admin/edit-producer/{id}', 'AdminProducerController@showEditProducer')->where('id','[0-9]+')->name('admin-edit-producer-view');
  Route::put('/admin/edit-producer/{id}', 'AdminProducerController@actionEditProducer')->name('admin-edit-producer-action');

  //Route supp producer
  Route::delete('/admin/delete-producer/{id}', 'AdminProducerController@deleteProducer')->name('admin-delete-producer');

  //Route moderation
  Route::put('/amin/confirm/{id}', 'AdminProducerController@confirmProducer')->name('confirm-prod');
  Route::put('/admin/refuse/{id}', 'AdminProducerController@refuseProducer')->name('refuse-prod');


//
//////


//////
//
  //Route listing articles
  Route::get('/admin/list-article', 'AdminArticleController@showListArticles')->name('admin-list-article');

  //Route ajout article
  Route::get('/admin/new-article', 'AdminArticleController@showNewArticle')->name('admin-new-article-view');
  Route::post('/admin/new-article', 'AdminArticleController@newArticleAction')->name('admin-new-article-action');

  //Route update article
  Route::get('/admin/edit-article/{id}', 'AdminArticleController@showEditArticle')->where('id','[0-9]+')->name('admin-edit-article-view');
  Route::put('/admin/edit-article/{id}', 'AdminArticleController@actionEditArticle')->name('admin-edit-article-action');

  //Route supp article
  Route::delete('/admin/delete-article/{id}', 'AdminArticleController@deleteArticle')->name('admin-delete-article');
//
//////

});
