<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
public function index(){
$data=array('title' =>"PET ONLINE");
$this->load->view('home',$data);
} 
}
