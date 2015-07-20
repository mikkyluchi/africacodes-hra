<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
			/*$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'okunuga.oriyomi@gmail.com',
    'smtp_pass' => 'oluwasoji88',
    'mailtype'  => 'html', 
    'charset'   => 'utf-8'
);
print_r($config);
exit();
$this->load->library('email', $config);
$this->email->set_newline("\r\n");
$this->load->library('email',$config);
$this->email->from('okunuga.oriyomi@gmail.com', 'Gloprive');
                        $this->email->to('okunuga.oluwasoji@hotmail.com');
                        $this->email->subject('Testing');
                        $this->email->message('Hello World');

                        if($this->email->send()){

				echo 'yes';

			}else{
				echo 'no';

			}
		exit();*/
		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect(base_url().'login', 'refresh');
		}else{
			
			if (!$this->ion_auth->is_admin()){
					
				redirect(base_url().'dashboard', 'refresh');
			}else{
					
				redirect(base_url().'dashboard', 'refresh');
			}	
		}
	}
}
