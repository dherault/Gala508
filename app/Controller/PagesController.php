<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}

	public function histoire(){
		//$this->set('title_for_layout', "L'histoire des Galas");
	}

	public function index(){
		//$this->set('title_for_layout', 'Bal des 508');
		/*$phototo = 'http://photos.galas-am-aix.fr/galleries/508/2011/IMG_'.rand(2138, 2645).'.jpg';
		$this->set('photototo', $phototo );*/
	}	

	public function home(){
		//$this->set('title_for_layout', 'Bal des 508');
		/*for ($i = 1; $i <= 10; $i++) {
   			$this->set('photo', 'http://photos.galas-am-aix.fr/galleries/508/2011/IMG_'.rand(2138, 2645).'.jpg');
		}*/	
		/*$phototo = 'http://photos.galas-am-aix.fr/galleries/508/2011/IMG_'.rand(2138, 2645).'.jpg';
		$this->set('photototo', $phototo );*/
	}

	public function infos(){
		//$this->set('title_for_layout', 'Bal des 508');
	}

	public function artistes(){
		//$this->set('title_for_layout', 'Bal des 508');
	}

	public function salles(){
		
	}

	public function ieban(){
		
	}

	public function after(){
		$this->layout='qrcode';
	}
	public function compteur(){
		$this->layout='qrcode';
		$this->loadModel('Compteur');
		$count = $this->Compteur->find('first');
		$this->set("count", $count['Compteur']['count']);
	}
	public function perdu(){

		$this->loadModel('Compteur');
		$compteur = $this->Compteur->find('first');
		$compteur['Compteur']['count'] += 1;
		$this->Compteur->id = $compteur['Compteur']['id'];
		$this->Compteur->saveField('count', $compteur['Compteur']['count']);

		$prout = rand(1, 10);
		if ($prout == 5) {
		//if (1) {
			$this->loadModel('Objet');
			$objets = $this->Objet->find('all');
			$total  = 0;
			$i      = 0;
			$freq   = [];
			$nom    = [];
			foreach ($objets as $objet) {
				$freq[$i] = $objet['Objet']['maxi'] + $total;
				$nom[$i] = $objet['Objet']['nom'];
				$total += $objet['Objet']['maxi'];
				$i++;
			}
			$frout = rand(1, $total);
			$lenom = "";
			//debug($freq);
			//debug($nom);
			//debug($frout);
			for ($j=0; $j < $i ; $j++) { 
				if ($frout <= $freq[$j]) {
					$lenom = $nom[$j];
					break;
				}
			}
			//debug($lenom);
			$this->loadModel('Qrcode');
			$qrcodes = $this->Qrcode->find('all');
			$ontdejagagne = 0;
			foreach ($qrcodes as $qrcode) {
				if ($qrcode['Qrcode']['objet'] == $lenom) {
					$ontdejagagne++;
				}
			}
			//debug("ont deja gagné :");
			//debug($ontdejagagne);
			$ontdejagagnetoday = 0;
			$lobjet = $this->Objet->findByNom($lenom);
			if ($ontdejagagne < $lobjet['Objet']['maxi']) {
				foreach ($qrcodes as $qrcode) {
					if ($qrcode['Qrcode']['objet'] == $lenom) {
						if (intval(substr($qrcode['Qrcode']['created'], 8, 10)) == getdate()['mday']) {
							$ontdejagagnetoday++;
						}
					}
				}
				//debug("ont deja gagné aujourdhui:");
				//debug($ontdejagagnetoday);
				if ($ontdejagagnetoday < $lobjet['Objet']['frequence']) {
					$gagne = true;
					$this->set("objet", $lobjet['Objet']['nom']);
				} else {
					$gagne = false;
				}
			} else {
				$gagne = false;
			}
		} else {
			$gagne = false;
		}
		$this->set("gagne", $gagne);
		$this->layout='qrcode';
		
	}
	public function gagne1(){
		
	}
	public function gagne2(){
		
	}
	public function gagne3(){
		
	}
}
