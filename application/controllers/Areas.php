<?php
class Areas extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('area_model');
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

		public function index($data = null)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data = array(
				'page_title' => 'Áreas',
				'title'=> 'Áreas',
				'menu_active'=> 'area'
			);

			$data['area'] = $this->area_model->get_areas();
			
			$this->_render_page('areas/index.php', $data);
		}


		

		
		public function insert_area()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nueva Área',
				'page_title' => 'Nueva Área',
				'menu_active'=> 'area',
			);
			$this->form_validation->set_rules('area_name', 'Área', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             	
				$this->_render_page('areas/insert_area', $data);
			}
			else
			{
				$this->area_model->set_area();
				$data['success'] = "El área se ha registrado con éxito.";
				redirect('areas', $data);
			}
		}

		

		public function delete_category($data = null){
			$this->area_model->delete_category($data);
			$data['success'] = "La categoría se ha borrado con éxito.";
			redirect('area', $data);
		}

		

     

        public function edit_area($idArea = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
		
                      
		    $data = array(
				'title' => 'Editar área',
				'page_title' => 'Editar área',
				'area_item' => $this->area_model->get_areaById($idArea),
				'menu_active'=> 'area',

			);
		    if (empty($data['area_item']))
			{
				show_404();
			}	

			$this->form_validation->set_rules('area_name', 'area', 'required');
			//$data['title'] = $data['activity_item']['idactivity'];
 			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
				$this->_render_page('areas/edit_area.php', $data);

			}
			else
			{
				$this->area_model->update_area($idArea,$data);
				$this->session->set_flashdata('info_message', 'La categoría se ha modificado con éxito.');
				$data['info_message']=$this->session->flashdata('info_message');
				redirect('areas', $data);
			}
			
        }

       

        public function view_area($idArea = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
            $data['area_item'] = $this->area_model->get_areaById($idArea);
		   
		    if (empty($data['area_item']))
			{
				show_404();
			}	
		
			$this->_render_page('activitys/view_activity.php', $data);			
        }


}