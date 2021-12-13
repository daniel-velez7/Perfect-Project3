<?php

class Connection extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
    }

    public function authentification()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');

        if ($this->input->post()) {
            $post = $this->input->post();

            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric');

            if ($this->form_validation->run()) {
                $email = $post["email"];
                $password = $post["password"];

                if ($this->auth->login($email, $password, "user")) {
                    $this->session->connected = true;
                    $this->session->user_type = $this->session->user['role_id'];
                    echo '<h3 class="text-center text-success mt-5">Connexion réussie</h3>';
                    // header('refresh:1;' . site_url("Profils/user"));
                } else {
                    echo '<h3 class="text-center text-danger mt-5">Connexion refusée , l\'adresse ou le mot de passe est incorrect</h3>';
                }
            }
        }

        $this->load->view('connection');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("index.php/Login/authentification"));
    }
}
