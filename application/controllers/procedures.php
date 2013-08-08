<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Procedures extends CI_Controller {
	
  public function __construct()
   {
		parent::__construct();
		// Your own constructor code
   }


	public function index()
		{
			$data['title'] = 'Indianapolis Facial Plastic Surgery';
			$data['header_view'] = 'headers/home_view';
			$data['view'] = 'home';
			$this->load->view('template', $data);
		}
		
	
	public function facelift()
	{
		$data['title'] = 'Facelift, Minilift, Rejuvalift Surgery in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/facelift_view';
		$this->load->view('template', $data);
	}	
	
	public function browlift()
	{
		$data['title'] = 'Browlift, Upper Eyelift Surgery in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/browlift_view';
		$this->load->view('template', $data);
	}	
	
	public function eyelift()
	{
		$data['title'] = 'Lower Eyelift, Midface Surgery in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/eyelift_view';
		$this->load->view('template', $data);
	}	
	
	public function rhinoplasty()
	{
		$data['title'] = 'Rhinoplasty (Nose Surgery) and Revision Surgery in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/rhinoplasty_view';
		$this->load->view('template', $data);
	}	
	
	public function otoplasty()
	{
		$data['title'] = 'Otoplasty Surgery in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/otoplasty_view';
		$this->load->view('template', $data);
	}
	
	public function chinimplants()
	{
		$data['title'] = 'Chin Implants in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/chinimplants_view';
		$this->load->view('template', $data);
	}
	
	public function lips()
	{
		$data['title'] = 'Lip Rejuvenation in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/lips_view';
		$this->load->view('template', $data);
	}
	
	public function skinresurfacing()
	{
		$data['title'] = 'Skin Resurfacing, Peels, Dermabrasion in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/skinresurfacing_view';
		$this->load->view('template', $data);
	}
	
	public function botox()
	{
		$data['title'] = 'Botox&#174;, Injectable Fillers, Lipodissolve in Indianapolis and Carmel Indiana';
		$data['view'] = 'procedures/botox_view';
		$this->load->view('template', $data);
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */