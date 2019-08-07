<?php

class product_model extends CI_Model{

	function getProduct($data){
			$this->db->insert('product', $data);
			echo 'data recorded';


	}
}
?>