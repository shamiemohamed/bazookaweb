<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index($slug = NULL)
	{
		if($slug == NULL) {
			return show_error('The page you are looking for is not exist.');
		}
		$this->data['title'] = 'Product landing page';

		$this->load->model('test_model');

		$this->data['product'] = $this->test_model->get_product($slug);
		// $this->data['description'] = $this->test_model->get_description();

		// $this->load->view('layouts/test_layout', $this->data );
		$this->load->view('test/test', $this->data);
	}

}
