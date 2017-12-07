<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index()
	{
		$this->load->view('template/template');
	}

	public function dashboard()
	{
		$this->load->view('template/dashboard');
	}

	public function upgrade()
	{
		$this->load->view('template/upgrade');
	}

	public function typography()
	{
		$this->load->view('template/typography');
	}

	public function user()
	{
		$this->load->view('template/user');
	}


	public function table()
	{
		$this->load->view('template/table');
	}
	public function notifications()
	{
		$this->load->view('template/notifications');
	}
	public function maps()
	{
		$this->load->view('template/maps');
	}
	public function icons()
	{
		$this->load->view('template/icons');
	}
	
}
