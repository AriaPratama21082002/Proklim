<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proklimjabar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();    
    }

	public function index()
	{
		$data['title'] = "Proklim";
		$data['konten'] = "Proklim";
		$this->load->view('Proklimjabar', $data);
	}
}
