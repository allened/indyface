<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Practice extends CI_Controller {
	
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
		
	public function staff()
	{
		$data['title'] = 'The Staff';
		$data['view'] = 'practice/staff_view';
		$this->load->view('template', $data);
	}
	
	public function office()
	{
		$data['title'] = 'Office';
		$data['view'] = 'practice/office_view';
		$this->load->view('template', $data);
	}	
	
	public function map()
	{
		$data['title'] = 'Map';
		$data['view'] = 'practice/map_view';
		$this->load->view('template', $data);
	}	
	
	public function frequently_asked_questions()
	{
		$data['title'] = 'Frequently Asked Questions';
		$data['view'] = 'practice/faq_view';
		$this->load->view('template', $data);
	}		

	public function news()
	{
		$data['title'] = 'News';
		$data['view'] = 'practice/news_view';
		$this->load->view('template', $data);
	}
	
	public function specials()
	{
		$data['title'] = 'Specials';
		$data['view'] = 'practice/specials_view';
		$this->load->view('template', $data);
	}
	
	public function testimonials()
	{
		$data['title'] = 'Testimonials';
		$data['view'] = 'practice/testimonials_view';
		$this->load->view('template', $data);
	}
	
	public function employment_opportunites()
	{
		$data['title'] = 'Employment Opportunities';
		$data['view'] = 'practice/employment_opportunities_view';
		$this->load->view('template', $data);
	}
	
	public function military_discount()
	{
		$data['title'] = 'Military Discount';
		$data['view'] = 'practice/military_discount_view';
		$this->load->view('template', $data);
	}
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */