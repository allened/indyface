<?php
class my404 extends CI_Controller
{
	public function __construct()
	{
	        parent::__construct();
	}

	public function index()
	{
		$this->output->set_status_header('404');
		
			$data['title'] = 'Indianapolis Facial Plastic Surgery';
			$data['view'] = 'misc/notfound_view.php';
			$this->load->view('template', $data);
	}
}
?>