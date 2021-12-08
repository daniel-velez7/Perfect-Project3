<?php

class User_model extends CI_Model {

    private $id;
    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $password;
    private $address;
    private $address2;
    private $city;
    private $code_postal;

    public $table_name = 'customers';

    public function __construct()
    {
    }

    public function set_id($newid)
    {
        $this->id = $newid;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_firstname($newFirstname)
    {
        $this->firstname = $newFirstname;
    }

    public function get_firstname()
    {
        return $this->firstname;
    }

    public function set_lastname($newlastname)
    {
        $this->lastname = $newlastname;
    }

    public function  get_lastname()
    {
        return $this->lastname;
    }

    public function set_telephone($newPhone)
    {
        $this->phone = $newPhone;
    }

    public function  get_phone()
    {
        return $this->phone;
    }

    public function set_email($newEmail)
    {
        $this->email = $newEmail;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_password($newPwd)
    {
        $this->password = $newPwd;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_address($newAddress)
    {
        $this->address = $newAddress;
    }

    public function  get_adresse1()
    {
        return $this->address;
    }

    public function set_address2($newAddress2)
    {
        $this->address2 = $newAddress2;
    }

    public function  get_address2()
    {
        return $this->address2;
    }

    public function set_code_postal($newCode_postal)
    {
        $this->code_postal = $newCode_postal;
    }

    public function  get_code_postal()
    {
        return $this->code_postal;
    }

    public function set_city($newCity)
    {
        $this->city = $newCity;
    }

    public function  get_city()
    {
        return $this->city;
    }

    public function Initialize($data)
    {
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->phone = $data['phone'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->address = $data['address'];
        $this->adress2 = $data['address2'];
        $this->city = $data['city'];
        $this->code_postal = $data['code_postal'];
    }

    public function add($data)
    {
        $this->load->database();
        $this->db->insert($this->table_name, $data);
    }

    public function delete($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete($this->table_name);
    }

    // public function update($data)
    // {
    //     $this->load->database();

    //     $this->db->where('id', $data['id']);
    //     $this->db->update($this->table_name, $data);
    // }

    public function update($id, $data)
    {
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->update('customers', $data);
    }

    public function GetById($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from($this->table_name);
        $query = $this->db->get();
        return $query->result();
    }

    public function GetList()
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from($this->table_name);
        $query = $this->db->get();
        return $query->result();
    }

    public function find_name($customers)
    {
        return $this->db->get_where('customers', array('id' => $customers))->row();
    }

}