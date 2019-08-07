<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	public function category()
	{	
		$this->load->view('header');
		$this->load->view('category');
		$this->load->view('footer');
	}
	public function single_product()
	{	
		$this->load->view('header');
		$this->load->view('single_product');
		$this->load->view('footer');
	}
	public function checkout()
	{	
		$this->load->view('header');
		$this->load->view('checkout');
		$this->load->view('footer');
	}
	public function cart()
	{	
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}
	public function confirmation()
	{	
		$this->load->view('header');
		$this->load->view('confirmation');
		$this->load->view('footer');
	}
	public function blog()
	{	
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function single_blog()
	{	
		$this->load->view('header');
		$this->load->view('single_blog');
		$this->load->view('footer');
	}
	public function login()
	{	
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function tracking()
	{	
		$this->load->view('header');
		$this->load->view('tracking');
		$this->load->view('footer');
	}
	public function elements()
	{	
		$this->load->view('header');
		$this->load->view('elements');
		$this->load->view('footer');
	}
	public function contact()
	{	
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function add_product()
	{		
			$this->load->model('product_model');
			
			
			if ($this->input->post('submit')) {
				$data=array();

			$data['name']=$this->input->post('name');
			$data['price']=$this->input->post('price');
			$data['description']=$this->input->post('desc');

			$this->product_model->getProduct($data);

			
			
		}
		else{
			$this->load->view('product');
			
		}

			
			}
		


			
	
		//$this->load->model('product_model');
		//$this->product_model->getProduct($data);

		
	
	
	

}
