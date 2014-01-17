<?php
class Google_maps_model extends CI_Model 
{
	function _construct()
	{
      parent::_construct();
	}
	
	function getAllLocations()
	{
		$q = $this->db->query("SELECT * FROM location WHERE verified=1 AND active=1");
		 if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
		 }
		 else
		 	$data ="";
        return $data;
	}

	function getFilteredLocations($madeIn, $product)
	{
		$sql ="";
		if ($madeIn == "pdx")
		{
			$sql = "made_in='$madeIn' AND";
		}
		else if ($madeIn == "orwa")
		{
			$sql = "made_in IN ('orwa', 'pdx') AND";
		}
		else if ($madeIn = "usa")
		{
			$sql = "made_in IN ('orwa', 'pdx', 'usa') AND";
		}
		
		$q = $this->db->query("SELECT * FROM location WHERE ".$sql." product='$product' AND verified=1 AND active=1");

		if ($q->num_rows() > 0 && ($madeIn != "" || $product != "")) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
		 }
		 else
		 	$data ="";
        return $data;
	}
	
	function post()
	{
		$this->load->database();
		$data = array(
			'name'=>$this->input->post('name'),	  
	        'cords'=>$this->input->post('cords'),
			'infobox'=>$this->input->post('infobox'),
			'url'=>$this->input->post('url'),
			'phone'=>$this->input->post('phone'),
			'product'=>$this->input->post('product'),
			'made_in'=>$this->input->post('made_in'),
			'verified'=>1, 								// Comment this to verify before displaying
			'active'=>$this->input->post('active'),
	    );
		$data['url'] = "http://" . $data['url'];
		$this->db->insert('location',$data);
	}
}
?>