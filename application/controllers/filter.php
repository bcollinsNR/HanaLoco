<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Filter extends CI_Controller {
	public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
   	}
	
	public function index()
	{
		$this->load->model('google_maps_model');  
        $result = $this->google_maps_model->getFilteredLocations($_POST['madeIn'], $_POST['product']);  
		$this->load->library('googlemaps');
		$config['center'] = 'Portland, OR';
		$config['zoom'] = '12';
		//$config['cluster'] = TRUE;
		$config['styles'] = array(
 			array("name"=>"Map", "definition"=>array(
    		array("featureType"=>"all", "stylers"=>array(array("saturation"=>"-30"))),
  			))
		);
		$config['stylesAsMapTypes'] = TRUE;
		$config['stylesAsMapTypesDefault'] = "Map";
		$config['disableMapTypeControl'] = TRUE;
		$config['disableNavigationControl'] = TRUE;
		$config['disableStreetViewControl'] = TRUE;
		$this->googlemaps->initialize($config);
		if($result != "")
		{
			foreach($result as $row)
			{
				$marker = array();
				$marker['position'] = $row->cords;
				$marker['draggable'] = FALSE;
				$marker['animation'] = 'DROP';
				$marker['infowindow_content'] = '<center><h4>'.$row->name.'</h4><a href=\"'. $row->url.'\" target=\"_blank\">'.$row->url.'</a> <br />'.$row->phone.'<br /><span class=\"label label-info\">'.$row->product.'</span>&nbsp;&nbsp;<span class=\"badge badge-warning\">'.$row->made_in.'</center></span>';
				$this->googlemaps->add_marker($marker);
			}
		}
		$data['map'] = $this->googlemaps->create_map();
		$data['madeIn'] = $_POST['madeIn'];
		$data['product'] = $_POST['product'];
		$this->load->helper('url');
		$this->load->view('index', $data);
	}
}