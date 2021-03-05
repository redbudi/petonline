<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
public function index(){
// $data=array('web' => $this->Model_app->getSelectedData('t_perusahaan','id','1')->row(),);
$this->load->view('home');
} 
}
