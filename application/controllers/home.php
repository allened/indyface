<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
  public function __construct()
   {
		parent::__construct();
		// Your own constructor code
   }


	public function index()
		{
			$data['title'] = 'Indianapolis Facial Plastic Surgery';
			$data['header_view'] = 'headers/home_view';
			$data['right_view'] = 'right_side/home_view';
			$data['description'] = 'At Winslow Facial Plastic Surgery, we provide the best in individualized care with experience and integrity. Serving the Indianapolis area, we are conveniently located and specialize in cosmetic surgery of the face to include rhinoplasty, revision rhinoplasty, facelift, browlift, eyelift and medical aesthetic services.';
			$data['view'] = 'home';
			$this->load->view('template', $data);
		}	
		
	public function notfound()
		{
			$data['title'] = 'Indianapolis Facial Plastic Surgery';
			$data['view'] = 'misc/notfound_view.php';
			$this->load->view('template', $data);
		}		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */