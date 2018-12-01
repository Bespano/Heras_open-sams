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

		public function index()
		{
			$data = array(
				'page_title' => 'Actividad',
				'activity' => $this->activity_model->get_activity(),
				'title'=> 'Actividad'
			);


			$this->_render_page('activity/index.php', $data);
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
		
		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Nueva Actividad';

			$this->form_validation->set_rules('activity_description', 'Descripción', 'required');
			$this->form_validation->set_rules('activity_category', 'Categoría', 'required');
			$this->form_validation->set_rules('activity_group', 'Grupo', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				//$this->load->view('templates/header', $data);
				$this->_render_page('activity/create', $data);
				//$this->load->view('activity/create');
				//$this->load->view('templates/footer');
				echo "form_validation";

			}
			else
			{
				$this->activity_model->set_activity();
				$this->load->view('activity/index');
			}
		}
}