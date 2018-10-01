<?php if (!defined('BASEPATH')) exit('no direct script access allowed');

class Model_login extends CI_model (

    public function getlogin($u,$p){
        $pwd = md5($p);
        $this->db->where('username',$u);
        $this->db->where('password',$pwd);
        $query=$this->db->get('admin_tbl');
        if($query->num_rows()>0){
            
            foreach ($query->result() as $row){
                $sess = array('username' => $row->username,
                              'password'  => $row->password);
                $this->session->set_userdata($sess);
                redirect('admin/dasbord');
            } 
        }
        else {
            $this->session->set_flashdata('info','maaf username atau password anda salah');
            redirect('admin/login');
            
        }
    }


)