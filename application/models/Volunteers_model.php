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

        
        public function set_volunteer()
        {
                              
                $data = array(
                        'volunteer_birthdate' => $this->input->post('volunteer_birthdate'),
                        'volunteer_firstname' => $this->input->post('volunteer_firstname'),
                        'volunteer_lastname' => $this->input->post('volunteer_lastname'),
                        'volunteer_email' => $this->input->post('volunteer_email'),
                        'volunteer_phone' => $this->input->post('volunteer_phone'),
                        'volunteer_occupation' => $this->input->post('volunteer_occupation'),
                        'volunteer_profession' => $this->input->post('volunteer_profession'),
                        'volunteer_availability' => $this->input->post('volunteer_availability'),
                        'volunteer_experience' => $this->input->post('volunteer_experience'),
                );

                return $this->db->insert('volunteers', $data);

        }

        public function del_volunteer($id)
        {
                $this->db->delete('volunteers', array('idVolunteer' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }

        public function get_volunteerById($idVolunteer)
        {
                              
                $query = $this->db->get_where('volunteers', array('idVolunteer' => $idVolunteer));
                //print_r($query->result_array());
                return $query->result_array();
        }

    public function update_volunteer($idVolunteer,$data)
        {
                              
                $data = array(
                        'volunteer_birthdate' => $this->input->post('volunteer_birthdate'),
                        'volunteer_firstname' => $this->input->post('volunteer_firstname'),
                        'volunteer_lastname' => $this->input->post('volunteer_lastname'),
                        'volunteer_email' => $this->input->post('volunteer_email'),
                        'volunteer_phone' => $this->input->post('volunteer_phone'),
                        'volunteer_occupation' => $this->input->post('volunteer_occupation'),
                        'volunteer_profession' => $this->input->post('volunteer_profession'),
                        'volunteer_availability' => $this->input->post('volunteer_availability'),
                        'volunteer_experience' => $this->input->post('volunteer_experience'),
                );
                $this->db->where('idVolunteer', $idVolunteer);
                return $this->db->update('volunteers', $data);

        }

        }
