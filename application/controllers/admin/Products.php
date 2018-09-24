<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		//load model -> model_products
		$this->load->model('model_products');
	}

	public function index()
	{
		$data['products'] = $this->model_products->all();
		$this->load->view('backend/view_all_product', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('stock', 'Available Stock', 'required|numeric');
        //$this->form_validation->set_rules('userfile', 'Product Image', 'required');
        if ($this->form_validation->run() == FALSE) {
        	$this->load->view('backend/form_tambah_product');
        }else{
        	$config['upload_path'] = './uploads/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['max_size'] = '300';
        	$config['max_width'] = '2000';
        	$config['max_height'] = '2000';
        	$this->load->library('upload',$config);
        	if ( ! $this->upload->do_upload()) {
        		//file gagal di upload
        		$this->load->view('backend/form_tambah_product');
        	}else{
        		//file berhasil di upload
        		$gambar=$this->upload->data();
        		$data_product=array(
        		'nama'=>set_value('nama'),
        		'description'=>set_value('description'),
        		'price'=>set_value('price'),
        		'stock'=>set_value('stock'),
        		'image'=>$gambar['file_name']
        	);
        	$this->model_products->create($data_product);
        	redirect('admin/products');
        }
    }
}

	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('stock', 'Available Stock', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
        	$data['products'] = $this->model_products->find($id);
        	$this->load->view('backend/form_edit_product', $data);
        }else{
        	// if($FILES['userfile']['nama'] != ''){
        	$config['upload_path'] = './uploads/';
        	$config['allowed_types'] = 'jpg|png';
        	$config['max_size'] = '300';
        	$config['max_width'] = '2000';
        	$config['max_height'] = '2000';
        	$this->load->library('upload',$config);
        	if ( ! $this->upload->do_upload()) {
        		$data['products'] = $this->model_products->find($id);
        		$this->load->view('backend/form_edit_product', $data);
        	}else{
        		$gambar=$this->upload->data();
        		$data_product = array(
        		'nama'       =>set_value('nama'),
        		'description'=>set_value('description'),
        		'price'      =>set_value('price'),
        		'stock'      =>set_value('stock'),
        		'image'      =>$gambar['file_name']
        	);
        		$this->model_products->update($id, $data_product);
        		redirect('admin/products');
        	}
      
        	$gambar=$this->upload->data();
        	$data_product = array(
        		'nama'       =>set_value('nama'),
        		'description'=>set_value('description'),
        		'price'      =>set_value('price'),
        		'stock'      =>set_value('stock'),
        		'image'      =>$gambar['file_name']
        	);
        	$this->model_products->update($id, $data_product);
        	redirect('admin/products');
        }
	}

public function delete($id)
	{
		$this->model_products->delete($id);
		redirect('admin/products'); 
	}
}