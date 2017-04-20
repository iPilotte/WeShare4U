<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {


  public function home()
  {
    $this->load->view('welcome');
  }

	public function shoes()
	{
		$this->load->view('shoes');
	}
  public function detail()
	{
		$this->load->view('detail');
	}


}
