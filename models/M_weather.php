<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_weather extends CI_Model{
    function get($city){
		 //get JSON
		 $json = file_get_contents("http://api.openweathermap.org/data/2.5/find?q=$city&appid=54391dbba72ecf2c12392e443a719024", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data['list'][0];
    }
}