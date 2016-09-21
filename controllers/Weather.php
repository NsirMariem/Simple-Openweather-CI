<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class weather extends CI_Controller{
    function __construct(){
        parent::__construct();
		
		//call model
        $this->load->model('M_weather');
    }
    function index(){
		
		// chack condition url
		if(!empty($_GET['city'])){ //Empty
			
			//send variabel from url to model
			$data['data2']=$this->M_weather->get($_GET['city']);
			
		} else { //Exist
			$data['data2']=null;
			
			//array city selection
			$data['city']=array('Jakarta','Yogyakarta','Bandung');
		}
		//Show
        $this->load->view('P_weather', $data);
    }
}