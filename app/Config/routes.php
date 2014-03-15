<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
	Router::connect('/histoire', array('controller' => 'pages', 'action' => 'histoire'));
	Router::connect('/infos', array('controller' => 'pages', 'action' => 'infos'));
	Router::connect('/artistes', array('controller' => 'pages', 'action' => 'artistes'));
	Router::connect('/salles', array('controller' => 'pages', 'action' => 'salles'));
	Router::connect('/ieban', array('controller' => 'pages', 'action' => 'ieban'));
	Router::connect('/22111Lars', array('controller' => 'pages', 'action' => 'perdu'));
	Router::connect('/ptitbisck8', array('controller' => 'pages', 'action' => 'gagne1'));
	Router::connect('/kthym22', array('controller' => 'pages', 'action' => 'gagne2'));
	Router::connect('/dufoutre18', array('controller' => 'pages', 'action' => 'gagne3'));
	Router::connect('/liste', array('controller' => 'qrcodes', 'action' => 'index'));
	Router::connect('/objets', array('controller' => 'objets', 'action' => 'index'));
	Router::connect('/count', array('controller' => 'pages', 'action' => 'compteur'));
	Router::connect('/felicitation', array('controller' => 'pages', 'action' => 'after'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

	Router::connect('/histoire', array('controller' => 'pages', 'action' => 'histoire'));