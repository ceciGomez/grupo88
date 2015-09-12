<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Controlador extends CI_Controller {
	function __construct(){
		parent:: __construct;

	}

	function vista(){
		$this -> load -> view ('templates/header');
		$this -> load -> view ('views/pages/ceci');
		$this -> load -> view ('templates/footer');
	}
}