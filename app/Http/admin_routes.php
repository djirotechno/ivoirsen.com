<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');
	
	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');
	
	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');
	
	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');





	/* ================== Homes ================== */
	Route::resource(config('laraadmin.adminRoute') . '/homes', 'LA\HomesController');
	Route::get(config('laraadmin.adminRoute') . '/home_dt_ajax', 'LA\HomesController@dtajax');

	/* ================== Domaines ================== */
	Route::resource(config('laraadmin.adminRoute') . '/domaines', 'LA\DomainesController');
	Route::get(config('laraadmin.adminRoute') . '/domaine_dt_ajax', 'LA\DomainesController@dtajax');

	/* ================== Projets ================== */
	Route::resource(config('laraadmin.adminRoute') . '/projets', 'LA\ProjetsController');
	Route::get(config('laraadmin.adminRoute') . '/projet_dt_ajax', 'LA\ProjetsController@dtajax');






	/* ================== Domaines ================== */
	Route::resource(config('laraadmin.adminRoute') . '/domaines', 'LA\DomainesController');
	Route::get(config('laraadmin.adminRoute') . '/domaine_dt_ajax', 'LA\DomainesController@dtajax');

	/* ================== Apropos ================== */
	Route::resource(config('laraadmin.adminRoute') . '/apropos', 'LA\AproposController');
	Route::get(config('laraadmin.adminRoute') . '/apropo_dt_ajax', 'LA\AproposController@dtajax');

	/* ================== Partenaires ================== */
	Route::resource(config('laraadmin.adminRoute') . '/partenaires', 'LA\PartenairesController');
	Route::get(config('laraadmin.adminRoute') . '/partenaire_dt_ajax', 'LA\PartenairesController@dtajax');


	/* ================== Contacts ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contacts', 'LA\ContactsController');
	Route::get(config('laraadmin.adminRoute') . '/contact_dt_ajax', 'LA\ContactsController@dtajax');

	/* ================== Catalogues ================== */
	Route::resource(config('laraadmin.adminRoute') . '/catalogues', 'LA\CataloguesController');
	Route::get(config('laraadmin.adminRoute') . '/catalogue_dt_ajax', 'LA\CataloguesController@dtajax');

	/* ================== Intervenents ================== */
	Route::resource(config('laraadmin.adminRoute') . '/intervenents', 'LA\IntervenentsController');
	Route::get(config('laraadmin.adminRoute') . '/intervenent_dt_ajax', 'LA\IntervenentsController@dtajax');

	/* ================== Temoignages ================== */
	Route::resource(config('laraadmin.adminRoute') . '/temoignages', 'LA\TemoignagesController');
	Route::get(config('laraadmin.adminRoute') . '/temoignage_dt_ajax', 'LA\TemoignagesController@dtajax');

	/* ================== Cvpdgs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/cvpdgs', 'LA\CvpdgsController');
	Route::get(config('laraadmin.adminRoute') . '/cvpdg_dt_ajax', 'LA\CvpdgsController@dtajax');

	/* ================== Etudiants ================== */
	Route::resource(config('laraadmin.adminRoute') . '/etudiants', 'LA\EtudiantsController');
	Route::get(config('laraadmin.adminRoute') . '/etudiant_dt_ajax', 'LA\EtudiantsController@dtajax');

	/* ================== Solutions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/solutions', 'LA\SolutionsController');
	Route::get(config('laraadmin.adminRoute') . '/solution_dt_ajax', 'LA\SolutionsController@dtajax');

	/* ================== RendezVouses ================== */
	Route::resource(config('laraadmin.adminRoute') . '/rendezvouses', 'LA\RendezVousesController');
	Route::get(config('laraadmin.adminRoute') . '/rendezvouse_dt_ajax', 'LA\RendezVousesController@dtajax');

	/* ================== Metiers ================== */
	Route::resource(config('laraadmin.adminRoute') . '/metiers', 'LA\MetiersController');
	Route::get(config('laraadmin.adminRoute') . '/metier_dt_ajax', 'LA\MetiersController@dtajax');

	/* ================== Valeurs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/valeurs', 'LA\ValeursController');
	Route::get(config('laraadmin.adminRoute') . '/valeur_dt_ajax', 'LA\ValeursController@dtajax');

	/* ================== Panoramas ================== */
	Route::resource(config('laraadmin.adminRoute') . '/panoramas', 'LA\PanoramasController');
	Route::get(config('laraadmin.adminRoute') . '/panorama_dt_ajax', 'LA\PanoramasController@dtajax');


		/* ================== SousPanoramas ================== */
		Route::resource(config('laraadmin.adminRoute') . '/souspanoramas', 'LA\SouspanoramasController');
		Route::get(config('laraadmin.adminRoute') . '/souspanorama_dt_ajax', 'LA\SouspanoramasController@dtajax');
});
