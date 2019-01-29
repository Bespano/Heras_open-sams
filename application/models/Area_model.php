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



        

        public function set_area()
        {
                              
                $data = array(
                    'category' => $this->input->post('area'),
                );
                return $this->db->insert('area', $data);
        }
        

        
    public function delete_area($id)
        {
                $this->db->delete('area', array('idArea' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }

   
    public function update_area($idArea,$data)
        {
                              
                $data = array(
                        'area' => $this->input->post('area'),

                );
                $this->db->where('idArea', $idArea);
                return $this->db->update('area', $data);

        }
    
}
