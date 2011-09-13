<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->spark('mustache_spark/0.0.1');
		$this->mustache_spark->set_master_template('index');
		$this->mustache_spark->merge_data(
			array(
				'form-name' => 'form',
				'form-action' => '/',
				'form-title' => 'Register form',
				'form-description' => 'Register here or you won\'t be able to post texts on our awsome website.',
				'fields' => array(
					'input' => array(
						array(
							'type' => 'text',
							'label' => 'E-mail',
							'description' => 'Enter a correct address',
							'name' => 'email'
						),
						array(
							'type' => 'password',
							'label' => 'Password',
							'description' => 'Min. length 6 characters',
							'name' => 'password'
						),
						array(
							'type' => 'password',
							'label' => 'Repeat password',
							'description' => 'To make sure it\'s correct',
							'name' => 'password-repeat'
						)
					)
				),
				'button-text' => 'Register'
			)
		);
		$this->mustache_spark->merge_template(
			array(
				'header' => 'header',
				'footer' => 'footer',
				'content' => 'form'
			)
		);
		$this->mustache_spark->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
