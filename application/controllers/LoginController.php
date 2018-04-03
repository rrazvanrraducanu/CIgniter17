<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}
        public function check(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            if($username=='Popescu'&&$password=='Bogdan'){
                $this->session->set_userdata(array('username'=>$username));
                $this->load->view('welcome');
            }else{
                $data['error']='Error message!!!';
                $this->load->view('login',$data);
            }
	}
public function logout(){
            $this->session->unset_userdata('username');
            redirect('LoginController');
        }
        public function welcome(){
            if($this->session->userdata('username')){
            $this->load->view('welcome');
        }else
            redirect('LoginController/logout');
        }     
}
