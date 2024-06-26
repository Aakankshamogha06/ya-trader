<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('admin/Blog_detail_model', 'Blog_detail_model');
        $this->load->model('admin/Seo_model', 'Seo_model');
       
        
    }

    public function affiliate()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/affiliate');
        $this->load->view('frontend/footer');
    }

    public function blog()
    {
        $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_view();
        $this->load->view('frontend/header');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/footer');
    }


    public function blog_details()
    {
        $data['blog_detail_view'] = $this->Blog_detail_model->blog_detail_data_nm();
        $this->load->view('frontend/header');
        $this->load->view('frontend/blog-detail',$data);
        $this->load->view('frontend/footer');
    }

    public function faq()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/faq');
        $this->load->view('frontend/footer');
    }

    public function index()
    {
        $data['seo_view'] = $this->Seo_model->seo_view();
        $this->load->view('frontend/header');
        $this->load->view('frontend/index',$data);
        $this->load->view('frontend/footer');
    }

    public function payment()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/payment');
        $this->load->view('frontend/footer');
    }

    public function pricing()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/pricing');
        $this->load->view('frontend/footer');
    }

    public function register()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/register');
        $this->load->view('frontend/footer');
    }

    public function regular()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/regular');
        $this->load->view('frontend/footer');
    }

    public function risk_disclosure()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/risk-disclosure');
        $this->load->view('frontend/footer');
    }

    public function sign_in()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/sign-in');
        $this->load->view('frontend/footer');
    }

    public function swing()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/swing');
        $this->load->view('frontend/footer');
    }

    public function terms_conditions()
    {
        $this->load->view('frontend/header');
        $this->load->view('frontend/terms-conditions');
        $this->load->view('frontend/footer');
    }

} 