<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('form_login');
	}
	
	public function ceklogin(){
	    if(isset($_POST['login'])){
	    	$user = $this->input->post('user',true);
	        $pass = $this->input->post('pass',true);
	        $cek = $this->app_model->proseslogin($user, $pass);

	        if ($cek > 0) {
	        		redirect('admin/products');
	        	} else {
	        		echo "Password atau Username anda salah";
	        	}	
	        } 
}
    public function logout(){
    	$this->session->session_destroy();
    	redirect('login');
    }
}
