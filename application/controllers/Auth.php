<?php
class Auth extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->add_package_path(APPPATH.'third_party/CodeIgniter-Ion-auth-3/');
				$this->load->library('ion_auth’);
        }

