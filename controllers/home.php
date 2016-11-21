<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('konten');
		$this->load->view('footer');
	}
	function konten2(){
		$this->load->view('header2');
		$this->load->view('konten2');
		$this->load->view('footer');	
	}
	function konten3(){
		$this->load->view('header3');
		$this->load->view('konten3');
		$this->load->view('footer');	
	}
	function konten4(){
		$this->load->view('header2');
		$this->load->view('konten4');
		$this->load->view('footer');	
	}
}
