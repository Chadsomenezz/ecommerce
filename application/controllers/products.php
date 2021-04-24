<?php


class Products extends CI_Controller{

	public function index(){
		if ($this->input->post('submit_cart')){
			$this->session->sess_destroy();
		}
		$this->load->view('products');
	}
	public function add_to_cart(){
		if (!$this->session->userdata('cart_count')){
			$this->session->set_userdata('cart_count',0);
		}
		if (!$this->session->userdata('cart_list')){
			$this->session->set_userdata('cart_list',[]);
		}




		if($this->input->get('dojo_tshirt')){
			$data = array(
				'name'=>'dojo_tshirt',
				'id'=>1,
				'price'=>19.99,
				'qty'=>$this->input->get('dojo_tshirt')
			);

			$qty = $this->session->userdata('cart_count');
			$qty++;
			$this->session->set_userdata('cart_count',$qty);

			$this->session->set_userdata('dojo_tshirt',$data);

			redirect(base_url());
		}
		if($this->input->get('dojo_cups')){
			$data = array(
				'name'=>'dojo_cup',
				'id'=>2,
				'price'=>2.99,
				'qty'=>$this->input->get('dojo_cups')
			);

			$qty = $this->session->userdata('cart_count');
			$qty++;
			$this->session->set_userdata('cart_count',$qty);

			$this->session->set_userdata('dojo_cups',$data);

			redirect(base_url());
		}


	}
}
