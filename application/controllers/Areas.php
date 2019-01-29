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


		public function get_modules_list($data = null)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data = array(
				'page_title' => 'Administrador',
				'title'=> 'Administrador de Módulos',
				'menu_active'=> 'area'
			);

			$data['module_data'] = $this->area_model->get_modules();
			
			$this->_render_page('area/modules_list.php', $data);
		}


		
		public function insert_category()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nueva Categoría',
				'menu_active'=> 'area',
			);
			$this->form_validation->set_rules('category', 'Categoría', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             	
				$this->_render_page('area/insert_category', $data);
			}
			else
			{
				$this->area_model->set_category();
				$data['success'] = "La categoría se ha registrado con éxito.";
				redirect('area', $data);
			}
		}

		public function insert_subcategory()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nueva Subcategoría',
				'menu_active'=> 'area',
			);


			$this->form_validation->set_rules('subcategory', 'Subcategoría', 'required');
	

			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
            	
				$this->_render_page('area/insert_subcategory', $data);
			}
			else
			{
				$this->area_model->set_subcategory();
				$data['success'] = "La subcategoría se ha registrado con éxito.";
				redirect('area', $data);
			}
		}


		public function delete_category($data = null){
			$this->area_model->delete_category($data);
			$data['success'] = "La categoría se ha borrado con éxito.";
			redirect('area', $data);
		}

		public function delete_subcategory($data = null){
			$this->area_model->delete_subcategory($data);
			$data['success'] = "La subcategoría se ha borrado con éxito.";
			redirect('area', $data);
		}

     

        public function edit_category($idCategory = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
		
                      
		    $data = array(
				'title' => 'Editar categoría',
				'category_item' => $this->area_model->get_categoryById($idCategory),
				'menu_active'=> 'area',

			);
		    if (empty($data['category_item']))
			{
				show_404();
			}	

			$this->form_validation->set_rules('category', 'category', 'required');
			//$data['title'] = $data['activity_item']['idactivity'];
 			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
				$this->_render_page('area/edit_category.php', $data);

			}
			else
			{
				$this->area_model->update_category($idCategory,$data);
				$this->session->set_flashdata('info_message', 'La categoría se ha modificado con éxito.');
				$data['info_message']=$this->session->flashdata('info_message');
				redirect('area', $data);
			}
			
        }

        public function edit_subcategory($idSubcategory = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
		
                      
		    $data = array(
				'title' => 'Editar Subcategoría',
				'subcategory_item' => $this->area_model->get_subcategoryById($idSubcategory),
				'menu_active'=> 'area',

			);
		    if (empty($data['subcategory_item']))
			{
				show_404();
			}	

			$this->form_validation->set_rules('subcategory', 'subcategory', 'required');
			//$data['title'] = $data['activity_item']['idactivity'];
 			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
				$this->_render_page('area/edit_subcategory.php', $data);

			}
			else
			{
				$this->area_model->update_subcategory($idSubcategory,$data);
				$this->session->set_flashdata('info_message', 'La subcategoría se ha modificado con éxito.');
				$data['info_message']=$this->session->flashdata('info_message');
				redirect('area', $data);
			}
			
        }

        public function view_category($idCategory = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
            $data['category_item'] = $this->area_model->get_categoryById($idCategory);
		   
		    if (empty($data['category_item']))
			{
				show_404();
			}	
		
			$this->_render_page('activitys/view_activity.php', $data);			
        }


}