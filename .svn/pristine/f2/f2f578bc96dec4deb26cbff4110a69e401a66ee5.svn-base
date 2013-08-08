<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aesthetics extends CI_Controller {
	
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
		
	public function facials()
	{
		$data['title'] = 'Indianapolis Facials';
		$data['view'] = 'aesthetics/facials_view';
		$data['description'] = 'Medi-Express Facial, Winslow Signature Facial, Acne Facial. Read about all the options we provide at Winslow Facial Plastic Surgery';
		$this->load->view('template', $data);
	}
	
	public function peels()
	{
		$data['title'] = 'Chemical Facial Peels Indianapolis';
		$data['view'] = 'aesthetics/peels_view';
		$data['description'] = 'Uncover your skins full potential at Winslow Facial Plastic Surgery. Jan Marini Peels
, PCA Chemical Peels, Micro-peel, and Microdermabrasion are some facial peels provided.';
		$this->load->view('template', $data);
	}
	
	public function giftcard()
	{
		$data['title'] = 'Gift Card';
		$data['view'] = 'aesthetics/giftcard_view';
		$this->load->view('template', $data);
	}
	
	public function thankyou()
	{
		$data['title'] = 'Gift Card';
		$data['view'] = 'aesthetics/giftcard_thankyou_view';
		$this->load->view('template', $data);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */