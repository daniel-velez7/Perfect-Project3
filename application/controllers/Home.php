<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

    public function index($page = 'home')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/navbar');
        $this->load->view('templates/slider');
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function about($page = 'about')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function formation($page = 'formation')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function academy($page = 'academy')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function blog($page = 'blog')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function shop($page = 'shop')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/navbar');
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }



    // public function view ($page = 'home'){
    //     if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
    //         show_404(); 
    //     }

    //     $data['title'] = ucfirst($page);

    //     $this->load->view('templates/navbar');
    //     $this->load->view('templates/header');
    //     $this->load->view('pages/'.$page, $data);
    //     $this->load->view('templates/footer');
    // }
}
