<?php
class Volunteers_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
	public function get_volunteers()
        {
                $query = $this->db->get('volunteers');
                //  $this->db->select("*")->from("volunteers")->join("categories", "activity.activity_category = categories.idCategory")->join("groups","activity.activity_group=groups.idGroup");
                // $query = $this->db->get();
                return $query->result_array();
        }

        public function get_categories()
        {
                
                 $result = $this -> db -> select('idCategory, Category') -> get('categories') -> result_array(); 
 
                $categories=array();
                $categories[''] = 'Elija categoría...'; 
                foreach($result as $r){
                        $categories[$r['idCategory']] = $r['Category']; 
                
                }
                
                return $categories;
        }

        public function get_groups()
        {
                
                 $result = $this -> db -> select('idGroup, Groups') -> get('groups') -> result_array(); 
 
                $groups=array();
                $groups[''] = 'Elija grupo...'; 
                foreach($result as $r){
                        $groups[$r['idGroup']] = $r['Groups']; 
                
                }
                
                return $groups;
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
