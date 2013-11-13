<?php
class User extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function password_req($username, $password)
    {
        $res = $this->db->get('codeigniter_user');
        foreach ($res->result() as $ret):
            if ($ret->codeigniter_username == $username && $ret->codeigniter_password == md5($password)) {
                return true;
                exit();
            }
        endforeach;

        return false;
    }

    function check_password($password)
    {
        $this->db->where('codeigniter_username', 'admin');
        $res = $this->db->get('codeigniter_user');
        foreach ($res->result() as $ret):
            if ($ret->codeigniter_password == md5($password)) {
                return true;
                exit();
            }
        endforeach;

        return false;
    }

    function new_password($pass, $current_pass)
    {
        $this->db->where('codeigniter_username', 'admin');
        $this->db->update('admin', array('codeigniter_password' => md5($pass)));
    }
}

?>