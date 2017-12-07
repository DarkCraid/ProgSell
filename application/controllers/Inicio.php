<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('test/template');
	}

	public function dashboard()
	{
		$this->load->view('test/dashboard');
	}

	public function upgrade()
	{
		$this->load->view('test/upgrade');
	}

	public function typography()
	{
		$this->load->view('test/typography');
	}

	public function user()
	{
		$this->load->view('test/user');
	}


	public function table()
	{
		$this->load->view('test/table');
	}
	public function notifications()
	{
		$this->load->view('test/notifications');
	}
	public function maps()
	{
		$this->load->view('test/maps');
	}
	public function icons()
	{
		$this->load->view('test/icons');
	}
	
}
