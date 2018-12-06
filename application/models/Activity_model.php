<?php
class Activity_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
	public function get_activity()
        {
                //$query = $this->db->get('activity');
                 $this->db->select("*")->from("activity")->join("categories", "activity.activity_category = categories.idCategory")->join("groups","activity.activity_group=groups.idGroup");
                $query = $this->db->get();
                return $query->result_array();
        }
        
        public function set_activity()
        {
                              
                $data = array(
                        'activity_date' => $this->input->post('activity_date'),
                        'activity_description' => $this->input->post('activity_description'),
                        'activity_category' => $this->input->post('activity_category'),
                        'activity_group' => $this->input->post('activity_group'),
                        'activity_amount' => $this->input->post('activity_amount'),
                );

                return $this->db->insert('activity', $data);

        }

        }
