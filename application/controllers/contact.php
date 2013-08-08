<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
  public function __construct()
   {
		parent::__construct();
		// Your own constructor code
   }


	public function ask_the_staff()
		{
			$data['title'] = 'Ask the Staff';
			$data['header_view'] = 'headers/simple_view';
			$data['view'] = 'contact/ask_the_staff_view';
			$data['footer_view'] = 'footer_simple';
			$this->load->view('template', $data);
		}
		
	public function ask_the_staff_send()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required|alpha');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_message('valid_phone_number_or_empty', 'The %s is not a valid number');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required|valid_phone_number_or_empty');
			$this->form_validation->set_rules('procedure', 'Procedure', 'required');
			$this->form_validation->set_rules('user_message', 'Question', 'required');
			
		
		
			if ($this->form_validation->run() == FALSE)
			{
				$this->ask_the_staff();
			}
			else // SEND THE MESSAGE
			{
				$this->load->library('email');
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['newline'] = '\r\n';

				$this->email->initialize($config);
				
				$this->email->from($this->input->post('email'), 'Indyface Ask The Staff');
				$this->email->to('info@indyface.com');
				//$this->email->to('allenedwards48@gmail.com');
				$this->email->bcc('allenedwards48@gmail.com');  
				
				$this->email->subject('Indyface Ask The Staff');
				
				$block_sender = array('sales@jahmobileapp.com');
				
				if (in_array($this->input->post('email'), $block_sender))
				{
					redirect('/contact/thankyou', 'refresh');
				} else {
					$message = "Sender Contact information ----------------------- \r\n";
					$message .= "Name: ".$this->input->post('name')."\r\n";
					$message .= "Email: ".$this->input->post('email')."\r\n"; 
					$message .= "Phone: ".$this->input->post('phone')."\r\n";
					$message .= "Procedure: ".$this->input->post('procedure')."\r\n";
					
					$message .= "\r\n";				
					$message .= "User Message -------------------- \r\n\r\n";
					$message .=  $this->input->post('user_message'); 
	
					
					$this->email->message($message);	
					
					$this->email->send();
				}
				
				
				redirect('/contact/thankyou', 'refresh');
			}

		}
		
		public function thankyou()
		{
			$data['title'] = 'Contact Thank You';
			$data['view'] = 'contact/thankyou_view';
			$data['footer_view'] = 'footer_simple';
			$this->load->view('template', $data);
		}
		
		public function win_a_spa_day()
		{
			$data['title'] = 'Win a Spa Day';
			$data['view'] = 'contact/win_view';
			$data['footer_view'] = 'footer_simple';
			$this->load->view('template', $data);
		}
		
		public function win_a_spa_day_send()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required|alpha');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Contact Number', 'required|alpha_dash');
			
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('city', 'Address', 'required|alpha');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('zip', 'Zip', 'required|numeric|exact_length[5]');
			
			$this->form_validation->set_rules('comments', 'Comments', '');
			$this->form_validation->set_rules('preffered_contact[]', 'Preffered Contact', 'required');

			
			if ($this->form_validation->run() == FALSE)
			{
				$this->win_a_spa_day();
			}
			else // SEND THE MESSAGE
			{
				$this->load->library('email');
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['newline'] = '\r\n';

				$this->email->initialize($config);
				
				$this->email->from($this->input->post('email'), 'Indyface Win A Spa Day');
				$this->email->to('info@indyface.com'); 
				//$this->email->to('allenedwards48@gmail.com'); 
				$this->email->bcc('allenedwards48@gmail.com'); 
				
				$this->email->subject('Indyface Win A Spa Day');

				$message = "Sender information ----------------------- \r\n";
				$message .= "Name: ".$this->input->post('name')."\r\n";
				$message .= "Email: ".$this->input->post('email')."\r\n"; 
				$message .= "Phone: ".$this->input->post('phone')."\r\n";
				
				$message .= "\r\n";
				$message .= "Address ----------------------- \r\n";
				$message .= $this->input->post('address')."\r\n";
				$message .= $this->input->post('city')."\r\n";
				$message .= $this->input->post('state')."\r\n";
				$message .= $this->input->post('zip')."\r\n";
				
				$message .= "\r\n";
				$message .= "Preffered Contact Method ----------------------- \r\n";
				$preffered_contact = $this->input->post('preffered_contact');
				foreach ($preffered_contact as $method)
				{
					$message .= $method."\r\n";
				}
				
				
				$message .= "\r\n";
				$message .= "User Comments or Suggestions -------------------- \r\n";
				$message .=  $this->input->post('comments'); 
				
				$this->email->message($message);	
				
				$this->email->send();
				
				redirect('/contact/thankyou', 'refresh');
			}
		}
		

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */