<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

public function index(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header');
$this->load->view('home',$data);
} 

public function contact(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header');
$this->load->view('contact',$data);
} 

public function service(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header');
$this->load->view('service',$data);
} 


public function login(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header');
$this->load->view('login',$data);
} 

public function registration(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header');
$this->load->view('registration',$data);
} 
}
