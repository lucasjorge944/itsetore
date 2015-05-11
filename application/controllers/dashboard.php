<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Dashboard extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		
		public function index(){
							
			$dados = array(
				'titulo' => 'Dashboard',
			);

			$this->load->view('dashboard', $dados);
		}	
	}

?>