<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources extends CI_Controller {
	
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
	
	public function financing()
	{
		$data['title'] = 'Financing';
		$data['view'] = 'resources/financing_view';
		$this->load->view('template', $data);
	}

	public function get_a_quote()
	{
		$data['title'] = 'Get a Quote';
		$data['view'] = 'resources/quote/prequote_view';

		$this->load->view('template', $data);
	}
		

//***********************************************
		// GET A QUOTE
		// STEP ONE
//***********************************************
	public function quote_stepone()
	{
		$data['title'] = 'Get a Quote';
		$data['view'] = 'resources/quote/stepone_view';

		// Session Information
		$this->session->unset_userdata('contact_information');
		$this->session->unset_userdata('photo_information');

		$this->session->set_userdata('quote_step', '1');
		$this->session->set_userdata('photo_information', array());

		//print_r($this->session->userdata('contact_information'));
		//print_r($this->session->userdata('photo_information'));

		//The View
		$this->load->view('template', $data);
	}
		public function quote_step_one_send()
		{
			//Valide the form fron Get a Quote: Step 1
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required|alpha');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_message('valid_phone_number_or_empty', 'The %s is not a valid number');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required|valid_phone_number_or_empty');
			$this->form_validation->set_rules('procedure', 'Procedure', 'required');
			$this->form_validation->set_rules('details', 'Details', '');

			if ($this->form_validation->run() == FALSE)
			{
				$this->quote_stepone();
			} else {
				$contact_infomation = array(
									'name' => $this->input->post('name'),
									'email' => $this->input->post('email'),
									'phone' => $this->input->post('phone'),
									'procedure' => $this->input->post('procedure'),
									'details' => $this->input->post('details')
										);
				$contact_infomation = $this->session->set_userdata('contact_information', $contact_infomation);
		
				$this->getaquote_photos();
			}
		}
//***********************************************
		// STEP TWO
//***********************************************

		public function getaquote_photos($message = null, $message_type = null)
		{
			$data['title'] = 'Get a Quote';
			$data['view'] = 'resources/quote/steptwo_view';
			$data['message'] = $message;
			$data['message_type'] = $message_type;
			$data['uploaded_photos'] = $this->session->userdata('photo_information');

			// Session Data
			$this->session->set_userdata('quote_step', '2');

			//View Information
			$this->load->view('template', $data);

			//print_r($this->session->userdata('contact_information'));
			//print_r($this->session->userdata('photo_information'));
		}

		public function do_upload() {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '100';
			$config['max_width']  = '1280';
			$config['max_height']  = '766';
			$this->load->library('upload', $config);



			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());

				$this->getaquote_photos($error, 'error');
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$photos_array = $this->session->userdata('photo_information');
				array_push($photos_array, $data['upload_data']['file_name']);

				$this->session->set_userdata('photo_information', $photos_array);

				$this->getaquote_photos('Photo Uploaded', 'success');
			}
			

		}
		public function remove_photo()
		{
			$photo_name = $this->input->post('photo_name');

			// Remove Photo from array
			$photos_array = $this->session->userdata('photo_information');
			$key = array_search($photo_name, $photos_array);
			unset($photos_array[$key]);
			//Reset the session
			$this->session->set_userdata('photo_information', $photos_array);
			//print_r($photos_array);
			
			//Remove phot from files
			unlink('uploads/'.$photo_name);
			redirect('/resources/getaquote_photos', 'refresh');
		}

//***********************************************
		// STEP THREE
//***********************************************
		public function getaquote_verify()
		{
			$data['title'] = 'Verify Your Quote Request';
			$data['view'] = 'resources/quote/stepthree_view';
			$data['contact_information'] = $this->session->userdata('contact_information');
			$data['photo_information'] = $this->session->userdata('photo_information');
			$this->load->view('template', $data);
		}

		/**
		* Sends the Quote
		*
		*/
		public function send_quote() 
		{	
			$this->load->library('email');
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['newline'] = '\r\n';

			$this->email->initialize($config);


			$this->email->from('test@gmail.com', 'Test Email');
			$this->email->to('allenedwards48@gmail.com'); 

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');	

			$this->email->send();

			print 'done';
		}





//***********************************************
// END GET A QUOTE
//***********************************************		
		
	public function patient_papwork()
	{
		$data['title'] = 'New Patient Papwork';
		$data['view'] = 'resources/patient_paperwork_view';
		$this->load->view('template', $data);
	}
	
	public function surgical_papwork()
	{
		$data['title'] = 'Surgical Papwork';
		$data['view'] = 'resources/surgical_paperwork_view';
		$this->load->view('template', $data);
	}
	
	public function out_of_town_visitors ()
	{
		$data['title'] = 'Out of Town Visitors';
		$data['view'] = 'resources/out_of_town_visitors_view';
		$this->load->view('template', $data);
	}
	
	public function links ()
	{
		$data['title'] = 'Links from Indyface';
		$data['view'] = 'resources/links_view';
		$this->load->view('template', $data);
	}
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */