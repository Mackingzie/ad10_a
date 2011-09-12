<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function insert_user(){
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email',
										'Email',
										'required');
		$this->form_validation->set_rules('password',
										'Lösenord',
										'required|min_length[5]');
		
		if ($this->form_validation->run() == FALSE){
			//$this->load->view('new_user', $data);
		}else{
			$this->load->model('User_model');
			if($this->User_model->insert_user()){
				redirect("user/thanks_for_creating_account", "refresh");
			}
		}
	}
	public function thanks_for_posting(){
		echo "Tack för att du skapat ett konto!";
}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
