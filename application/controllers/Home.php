<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
    }

    public function index($page = 'home')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/slider');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function about($page = 'about')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function formation($page = 'formation')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function academy($page = 'academy')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function blog($page = 'blog')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function profil()
    {

        $data['title'] = ucfirst('profil');

        if ($this->input->post()) {
            $post = $this->input->post();
            
            if (isset($post['update'])) {

                unset($post['update']);

                $id = $this->session->user['id'];
                $post['password'] = $this->auth->crypt_password($post['password']);
                $this->User_model->update($id, $post);
                $this->session->user = (array)$this->User_model->GetById($id);


            } else if (isset($post['delete'])) {

                $id = $this->session->user['id'];

                $this->User_model->delete($id);

                session_destroy();
                redirect('Login/authentification');
            }
        }

        $data['user'] = $this->session->user;

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pages/profil', $data);
        $this->load->view('templates/footer');
    }


    public function shop($page = 'shop')
    {

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
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
