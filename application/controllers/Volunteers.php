<?php
class Volunteers extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('volunteers_model');
                $this->load->helper('url_helper');
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

		public function index($data =null)
		{

			
$msg=$data['info_message'];
echo $data['info_message'];

			$data = array(
				'page_title' => 'Voluntarios',
				'volunteers' => $this->volunteers_model->get_volunteers(),
				'title'=> 'Voluntarios',
				'info_message_view' => $msg,
			);
			

			

			 /*$arraydata = array(
                'Project_name'  => 'SAMS Social Assistance Management System',
                'version' => 'Alpha version',
	        );
	        $this->session->set_userdata($arraydata);*/
			$this->_render_page('volunteers/index.php', $data);
		}

		
		public function insert_volunteer()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nuevo Voluntario/a',
				//'preferences' => $this->volunteers_model->get_preferences(),
				//'groups' => $this->volunteers_model->get_groups()
			);

			$this->form_validation->set_rules('volunteer_phone', 'Volunteer phone', 'required');
			$this->form_validation->set_rules('volunteer_email', 'Volunteer email', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
            	
				$this->_render_page('volunteers/insert_volunteer', $data);
			}
			else
			{
				$this->volunteers_model->set_volunteer();
//				$data['success'] = "El voluntario/a se ha registrado con éxito.";
				redirect('volunteers', $data);
			}
		}

		public function delete($data = null){
			$this->volunteers_model->del_volunteer($data);
			//$data['success'] = "El voluntario se ha borrado con éxito.";
			redirect('volunteers', $data);
		}


        public function edit_volunteer($idVolunteer = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
            $this->load->library('session');			
            
            $data['volunteer_item'] = $this->volunteers_model->get_volunteerById($idVolunteer);
		   
		    if (empty($data['volunteer_item']))
			{
				show_404();
			}	

			$this->form_validation->set_rules('volunteer_firstname', 'Volunteer First name', 'required');
			//$data['title'] = $data['volunteer_item']['idVolunteer'];
 			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
				$this->_render_page('volunteers/edit_volunteer.php', $data);

			}
			else
			{
				$this->volunteers_model->update_volunteer($idVolunteer,$data);
				$this->session->set_flashdata('info_message', 'El voluntario/a se ha modificado con éxito.');
				$data['info_message']=$this->session->flashdata('info_message');
				redirect('volunteers', $data);
			}
			
        }


        public function view_volunteer($idVolunteer = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
            $data['volunteer_item'] = $this->volunteers_model->get_volunteerById($idVolunteer);
		   
		    if (empty($data['volunteer_item']))
			{
				show_404();
			}	
		
			$this->_render_page('volunteers/view_volunteer.php', $data);			
        }

}