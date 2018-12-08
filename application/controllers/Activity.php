<?php
class Activity extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('activity_model');
                $this->load->helper('url_helper');
        }


		private function _render_page($view, $data = null)
		{
			$this->viewdata = (empty($data)) ? $this->data : $data;

			$this->load->view('header.php', $this->viewdata);
			$this->load->view($view, $this->viewdata);
			$this->load->view('footer.php', $this->viewdata);
		}

		public function index($data = null)
		{
			$filter = $this->input->post('filter');
        	$field  = $this->input->post('field');
        	$search = $this->input->post('search');
			$data = array(
				'page_title' => 'Actividad',
				'title'=> 'Actividad',
				'success'=> ''
			);

			

        if (isset($filter) && !empty($search)) {         
            $data['activity'] = $this->activity_model->get_activity_WhereLike($field, $search);
        } else {            
            $data['activity'] = $this->activity_model->get_activity();
        }


			$this->_render_page('activity/index.php', $data);
		}

		
		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			

			$data = array(
				'title' => 'Nueva Actividad',
				'categories' => $this->activity_model->get_categories(),
				'subcategories' => $this->activity_model->get_subcategories()
			);

			$this->form_validation->set_rules('activity_description', 'Descripción', 'required');
			$this->form_validation->set_rules('activity_category', 'Categoría', 'required');
			$this->form_validation->set_rules('activity_subcategory', 'Subcategoría', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				// if person does not fill in correct info, they get resubmitted back to the form.             
            	
				$this->_render_page('activity/create', $data);
			}
			else
			{
				$this->activity_model->set_activity();
				$data['success'] = "La actividad se ha registrado con éxito.";
				redirect('activity', $data);
			}
		}


		public function delete($data = null){
			$this->activity_model->del_activity($data);
			$data['success'] = "La actividad se ha borrado con éxito.";
			redirect('activity', $data);
		}

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);
				        if (empty($data['news_item']))
						{
							show_404();
						}	

				$data['title'] = $data['news_item']['title'];

				$this->load->view('templates/header', $data);
				$this->load->view('news/view', $data);
				$this->load->view('templates/footer');
        }

}