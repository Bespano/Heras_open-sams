<?php
class Administration extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('administration_model');
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
				'page_title' => 'Administrador',
				'title'=> 'Administrador',
				'menu_active'=> 'administration'
			);

			$data['category'] = $this->administration_model->get_categories();
			$data['subcategory'] = $this->administration_model->get_subcategories();
			$this->_render_page('administration/index.php', $data);
		}


		public function get_modules_list($data = null)
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data = array(
				'page_title' => 'Administrador',
				'title'=> 'Administrador de Módulos',
				'menu_active'=> 'administration'
			);

			$data['module_data'] = $this->administration_model->get_modules();
			
			$this->_render_page('administration/modules_list.php', $data);
		}


		
		public function insert_category()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nueva Categoría',
				'menu_active'=> 'administration',
			);
			$this->form_validation->set_rules('category', 'Categoría', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             	
				$this->_render_page('administration/insert_category', $data);
			}
			else
			{
				$this->administration_model->set_category();
				$data['success'] = "La categoría se ha registrado con éxito.";
				redirect('administration', $data);
			}
		}

		public function insert_subcategory()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nueva Subcategoría',
				'menu_active'=> 'administration',
			);


			$this->form_validation->set_rules('subcategory', 'Subcategoría', 'required');
	

			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
            	
				$this->_render_page('administration/insert_subcategory', $data);
			}
			else
			{
				$this->administration_model->set_subcategory();
				$data['success'] = "La subcategoría se ha registrado con éxito.";
				redirect('administration', $data);
			}
		}


		public function delete_category($data = null){
			$this->administration_model->delete_category($data);
			$data['success'] = "La categoría se ha borrado con éxito.";
			redirect('administration', $data);
		}

		public function delete_subcategory($data = null){
			$this->administration_model->delete_subcategory($data);
			$data['success'] = "La subcategoría se ha borrado con éxito.";
			redirect('administration', $data);
		}

     

        public function edit_category($idCategory = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
		
                      
		    $data = array(
				'title' => 'Editar categoría',
				'category_item' => $this->administration_model->get_categoryById($idCategory),
				'menu_active'=> 'administration',

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
				$this->_render_page('administration/edit_category.php', $data);

			}
			else
			{
				$this->administration_model->update_category($idCategory,$data);
				$this->session->set_flashdata('info_message', 'La categoría se ha modificado con éxito.');
				$data['info_message']=$this->session->flashdata('info_message');
				redirect('administration', $data);
			}
			
        }

        public function edit_subcategory($idSubcategory = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
		
                      
		    $data = array(
				'title' => 'Editar Subcategoría',
				'subcategory_item' => $this->administration_model->get_subcategoryById($idSubcategory),
				'menu_active'=> 'administration',

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
				$this->_render_page('administration/edit_subcategory.php', $data);

			}
			else
			{
				$this->administration_model->update_subcategory($idSubcategory,$data);
				$this->session->set_flashdata('info_message', 'La subcategoría se ha modificado con éxito.');
				$data['info_message']=$this->session->flashdata('info_message');
				redirect('administration', $data);
			}
			
        }

        public function view_category($idCategory = NULL)
        {
            $this->load->helper('form');
			$this->load->library('form_validation');
            $data['category_item'] = $this->administration_model->get_categoryById($idCategory);
		   
		    if (empty($data['category_item']))
			{
				show_404();
			}	
		
			$this->_render_page('activitys/view_activity.php', $data);			
        }


}