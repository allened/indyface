<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skincare extends CI_Controller {
	
  public function __construct()
   {
		parent::__construct();
		// Your own constructor code
   }


	public function index()
		{
			$data['title'] = 'Laser & Skin Care Services in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/index_view';
			$this->load->view('template', $data);
		}
		
	public function microderm()
		{
			$data['title'] = 'Microdermabrasion in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/microderm_view';
			$this->load->view('template', $data);
		}
	
	public function micropeel()
		{
			$data['title'] = 'Micropeel in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/micropeel_view';
			$data['description'] = 'Uncover your skins full potential at Winslow Facial Plastic Surgery. Jan Marini Peels, PCA Chemical Peels, Micro-peel, and Microdermabrasion are some facial peels provided.';
			$this->load->view('template', $data);
		}			
		
	public function Facials()
		{
			$data['title'] = 'Facials in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/facials_view';
			$data['description'] = 'Medi-Express Facial, Winslow Signature Facial, Acne Facial. Read about all the options we provide at Winslow Facial Plastic Surgery';
			$this->load->view('template', $data);
		}	
		
	public function lash_extensions()
		{
			$data['title'] = 'LATISSE (eye lash extentsion) in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/lash_view';
			$data['description'] = 'Our office carries LATISSE - the first and only FDA approved treatment for inadequate or not enough lashes. Find out how Winslow Facial Plastic Surgery can help you.';
			$this->load->view('template', $data);
		}	
		
	public function waxing()
		{
			$data['title'] = 'Facial Waxing in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/waxing_view';
			$data['description'] = 'Fusion Spas waxing method is personalized and customized for you and your needs.';
			$this->load->view('template', $data);
		}
		
	public function acupuncture()
		{
			$data['title'] = 'Acupuncture in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/acupuncture_view';
			$this->load->view('template', $data);
		}
	
	public function laser_skin_resurfacing()
		{
			$data['title'] = 'Laser Skin Resurfacing in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/laser_skin_resurfacing_view';
			$this->load->view('template', $data);
		}
			
		
	public function laser_hair_removal()
		{
			$data['title'] = 'Laser Hair Removal in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/hairremoval_view';
			$this->load->view('template', $data);
		}
		
	public function perfect_tan()
		{
			$data['title'] = 'Spray Tan in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/perfecttan_view';
			$this->load->view('template', $data);
		}
		
	public function message_therapy()
		{
			$data['title'] = 'Massage Therapy in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/message_view';
			$this->load->view('template', $data);
		}
		
	public function lumicell_touch()
		{
			$data['title'] = 'Lumicell Touch in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/cellulite_view';
			$this->load->view('template', $data);
		}
	
	public function permanent_makeup()
		{
			$data['title'] = 'Permanent Makeup in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/permanentmakeup_view';
			$this->load->view('template', $data);
		}
		
	public function makeup()
		{
			$data['title'] = 'Makeup in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/makeup_view';
			$this->load->view('template', $data);
		}
	
	public function brow_lash_tinting()
		{
			$data['title'] = 'Brow / Lash Tinting in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/browlash_view';
			$this->load->view('template', $data);
		}				
		
	public function aesthetics_question()
		{
			$data['title'] = 'Aesthetics Question in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/qa_view';
			$this->load->view('template', $data);
		}
		
	public function winslow_membership()
		{
			$data['title'] = 'Winslow Membership in Indianapolis and Carmel Indiana';
			$data['view'] = 'skincare/membership_view';
			$this->load->view('template', $data);
		}
		
	/******** Vasular Laser Stuff ***************/
	public function patient_information()
		{
			$data['title'] = 'Vascular Laser Patient Information';
			$data['view'] = 'skincare/vascular_laser/information_view';
			$this->load->view('template', $data);
		}
		
	public function vascular_faq()
		{
			$data['title'] = 'Vascular FAQ';
			$data['view'] = 'skincare/vascular_laser/faq_view';
			$this->load->view('template', $data);
		}									
		

	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */