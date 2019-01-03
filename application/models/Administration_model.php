<?php
class Administration_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
        public function get_categories()
        {
                
                 $result = $this -> db -> select('idCategory, Category') -> get('categories') -> result_array(); 
 
                $categories=array();
                $categories[''] = 'Elija categoría...'; 
                foreach($result as $r){
                        $categories[$r['idCategory']] = $r['Category']; 
                
                }
                
                return $result;
        }


        public function set_category()
        {
                              
                $data = array(
                        'category' => $this->input->post('category'),
                        
                );

                return $this->db->insert('categories', $data);

        }

        public function get_subcategories()
        {
                
                 $result = $this -> db -> select('idSubcategory, subcategory') -> get('subcategories') -> result_array(); 
 
                $subcategories=array();
                $subcategories[''] = 'Elija subcategoría...'; 
                foreach($result as $r){
                        $subcategoriess[$r['idSubcategory']] = $r['subcategory']; 
                
                }
                
                return $result;
        }
        
    
        

    public function del_category($id)
        {
                $this->db->delete('categories', array('idCategory' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }

    public function get_activityById($idActivity)
        {                              
            $this->db->select("*")->from("activity")->join("categories", "activity.activity_category = categories.idCategory")->join("subcategories","activity.activity_subcategory=subcategories.idGroup")->like('IdActivity', $idActivity);
            $query = $this->db->get();
            return $query->result_array();
        }

    public function update_category($idCategory,$data)
        {
                              
                $data = array(
                        'category' => $this->input->post('category'),

                );
                $this->db->where('idCategory', $idCategory);
                return $this->db->update('category', $data);

        }
}
