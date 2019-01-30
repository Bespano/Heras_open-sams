<?php
class Area_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
        public function get_areas()
        {
                
                 $result = $this -> db -> select('*') -> get('areas') -> result_array(); 
 
                $areas=array();
                $areas[''] = 'Elija áreas...'; 
                foreach($result as $r){
                        $areas[$r['idArea']] = $r['area_name']; 
                
                }
                
                return $result;
        }



        public function get_areaById($idArea)
        {                              
            $this->db->select("*")->from("areas")->like('IdArea', $idArea);
            $query = $this->db->get();
            return $query->result_array();
        }

        public function set_area()
        {
                              
                $data = array(
                    'area_name' => $this->input->post('area_name'),
                );
                return $this->db->insert('areas', $data);
        }
        

        
    public function delete_area($id)
        {
                $this->db->delete('area', array('idArea' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }

   
    public function update_area($idArea,$data)
        {
                              
                $data = array(
                        'area_name' => $this->input->post('area_name'),

                );
                $this->db->where('idArea', $idArea);
                return $this->db->update('areas', $data);

        }
    
}
