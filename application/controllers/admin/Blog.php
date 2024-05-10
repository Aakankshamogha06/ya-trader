<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('admin/Blog_model', 'Blog_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_blog()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/blog/add_blog';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function blog_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->Blog_model->blog_data_submit($data) == true) {

					redirect("blog/view_blog");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function blog_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['blog_view'] = $this->Blog_model->blog_view();
					$data['view'] = 'admin/blog/view_blog';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function blog_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_blog'] = $this->Blog_model->blog_edit($id);
					$data['view'] = 'admin/blog/edit_blog';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function blog_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->Blog_model->blog_update_data($data) == true) {

							redirect("blog/view_blog");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function blog_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->Blog_model->blog_delete($id) == true) {

							redirect("blog/view_blog");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>