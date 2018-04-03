<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('main');
	}
        public function contact()
	{
		$this->load->view('contact');
	}
          public function blog()
	{
		$this->load->view('blog');
	}
          public function about()
	{
		$this->load->view('about');
	}
}
