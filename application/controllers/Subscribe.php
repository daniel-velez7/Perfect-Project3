<?php

class Subscribe extends CI_Controller
{
    function  __construct(){
        parent::__construct();
        
        // Load product model
        // $this->load->model('product');
    }

    public function register()
    {

        // $data['cartItems'] = $this->cart->contents();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar');

        if ($this->input->post()) {
            $post = $this->input->post();

            $this->form_validation->set_rules('firstname', 'firstname', 'required|alpha|min_length[2]');
            $this->form_validation->set_rules('lastname', 'lastname', 'required|alpha|min_length[2]');
            $this->form_validation->set_rules('phone', 'phone', 'required|numeric');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[customers.email]');
            $this->form_validation->set_rules('code_postal', 'code_postal', 'required|numeric|exact_length[5]');

            //Check adresse1 is correctly write
            $this->form_validation->set_rules('address', 'address', 'required|max_length[100]|callback__addr1Valid[address]');

            //Check adresse2 is correctly write
            $this->form_validation->set_rules('address2', 'address2', 'max_length[100]|callback__addr2Valid[address2]');

            //Check town is correctly write
            $this->form_validation->set_rules('city', 'city', 'required|max_length[100]|callback__cityValid[city]');

            //Check pwd is enter correctly two times in a row
            $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric');
            $this->form_validation->set_rules('password_conf', 'password_conf', 'required|alpha_numeric|matches[password]');

            if ($this->form_validation->run()) {
                $this->load->model('User_model');
                $post['password'] = $this->auth->crypt_password($post['password']);

                unset($post['password_conf']);
                $post['role_id'] = 2;

                $this->User_model->add($post);
                echo '<h3 class="text-center text-success mt-5">Inscription validée</h3>';
                header('refresh:1;' . site_url("Login/authentification"));
            } 
        }

        $this->load->view('subscribe');
        $this->load->view('templates/footer');
    }

    function _addr1Valid($address)
    {
        if (preg_match('/[\'^£$%&*()}{@#~?><>,\/.|=_+¬-]/', $address)) {
            $this->form_validation->set_message('_addr1Valid', 'Seuls les espaces, les nombres et les lettres sont acceptés');
            return false;
        } else {
            return true;
        }
    }

    function _addr2Valid($address2)
    {
        if (preg_match('/[\'^£$%&*()}{@#~?><>,\/.|=_+¬-]/', $address2)) {
            $this->form_validation->set_message('_addr2Valid', 'Seuls les espaces, les nombres et les lettres sont acceptés');
            return false;
        } else {
            return true;
        }
    }

    function _cityValid($city)
    {
        if (preg_match('/[\'^£$%&*()}{@#~?><>,\/.|=_+¬-]/', $city)) {
            $this->form_validation->set_message('_cityValid', 'Seuls les espaces, les nombres et les lettres sont acceptés');
            return false;
        } else {
            return true;
        }
    }

    public function _notMatch($password, $password_conf)
    {
        var_dump($password);
        var_dump($password_conf);
        if ($password_conf != $password) {
            $this->form_validation->set_message('_notMatch', 'Les deux mots de passe ne correspondent pas');
            return false;
        }
        return true;
    }
}
