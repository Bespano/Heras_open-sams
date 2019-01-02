<?php if ( ! defined('BASEPATH')) { exit('No direct script access allowed');}

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->library('ion_auth');
	    if (!$this->ion_auth->logged_in())
	    {
	      //redirect them to the login page
	      redirect('Auth/login', 'refresh');
	    }
	}
		
	private function _render_page($view, $data = null)
	{
		$this->viewdata = (empty($data)) ? $this->data : $data;

		$this->load->view('header.php', $this->viewdata);
		$this->load->view('main_header.php', $this->viewdata);
		$this->load->view($view, $this->viewdata);
		$this->load->view('footer.php', $this->viewdata);
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Asistencia Social',
			'menu_active' => 'Inicio',
		);
		// set array of items in session
        $arraydata = array(
                'Project_name'  => 'SAMS Social Assistance Management System',
                'version' => 'Alpha version',

        );
        $this->session->set_userdata($arraydata);
		$this->_render_page('index.php', $data);
	}
}
