<?php
	
	/**
	*  
	*
	* 
	* @author Sayef
	* 
	*/
	// set a constant that holds the project's folder path, like "/var/www/".
	// DIRECTORY_SEPARATOR adds a slash to the end of the path
	define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
	//Set css, img, js files loaction
	define('CSS', ROOT . 'public/css/');
	define('JS', ROOT . 'public/js/');
	define('IMG', ROOT . 'public/img/');


	// set a constant that holds the project's "application" folder, like "/var/www/app".
	define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
	//Global Variable For Language
	 


    // load language file kept in app/arch/lang





	// load application config (error reporting etc.)
	require APP . 'arch/config/config.php';
	// load application class
	


	require APP . 'core/controller.php';
	new Controller();

	require APP . 'core/view.php';
	$app = new View();

	






	
?>


