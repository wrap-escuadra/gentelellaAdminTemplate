<?php

class User_model extends CI_Model {

    function getRoles($role_id=null)
    {
        if($role_id!=null)
        {
            $this->db->where('role_id',$role_id);
        }
        $q = $this->db->get('lu_roles');
        return $q->result();
    }

    function getUsers($user_id=null){
        if($user_id != null){
            $this->db->where('user_id',$user_id);
            return $this->db->get('mt_users')->row();
        }
        return $this->db->get('mt_users')->result();

    }

    function addUser($post)
    {
        $data = array(
            'fname' => $post['fname'],
            'lname' => $post['lname'],
            'username' => $post['username'],
            'password' => md5($post['password']),
            'role' => $post['role'],
            'email' => $post['email']
        );

       return $this->db->insert('mt_users',input_prep($data));
    }

}