<?php
class Administration_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
        public function get_categories()
        {
                
                 $result = $this -> db -> select('*') -> get('categories') -> result_array(); 
 
                $categories=array();
                $categories[''] = 'Elija categoría...'; 
                foreach($result as $r){
                        $categories[$r['idCategory']] = $r['category_name']; 
                
                }
                
                return $result;
        }



        public function get_modules()
        {
                
                 $result = $this -> db -> select('*') -> get('modules') -> result_array(); 
 
                $modules=array();
                $modules[''] = 'Elija módulo...'; 
                foreach($result as $r){
                        $modules[$r['idModule']] = $r['module_name']; 
                
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
        
        public function set_subcategory()
        {
                              
                $data = array(
                    'subcategory' => $this->input->post('subcategory'),
                );
                return $this->db->insert('subcategories', $data);
        }
    
        

    public function delete_category($id)
        {
                $this->db->delete('categories', array('idCategory' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }

    public function delete_subcategory($id)
        {
                $this->db->delete('subcategories', array('idSubcategory' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
        }    

    public function get_categoryById($idCategory)
        {                              
            $this->db->select("*")->from("categories")->like('IdCategory', $idCategory);
            $query = $this->db->get();
            return $query->result_array();
        }

    public function get_subcategoryById($idSubcategory)
    {                              
        $this->db->select("*")->from("subcategories")->like('idSubcategory', $idSubcategory);
        $query = $this->db->get();
        return $query->result_array();
    }    

    public function update_category($idCategory,$data)
        {
                              
                $data = array(
                        'category' => $this->input->post('category'),

                );
                $this->db->where('idCategory', $idCategory);
                return $this->db->update('categories', $data);

        }
    public function update_subcategory($idSubcategory,$data)
    {
                          
            $data = array(
                    'subcategory' => $this->input->post('subcategory'),

            );
            $this->db->where('idsubcategory', $idSubcategory);
            return $this->db->update('subcategories', $data);

    }
}
