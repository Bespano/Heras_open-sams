<?php
class testmongodb_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('mongoci');
		}
		
		public function insert_article($data)
		{
		    $query = $this->mongoci->db->article->insert($data);
			if($query=='1')
		   {
			echo "Record Inserted";
			}			
		}
	}
?>