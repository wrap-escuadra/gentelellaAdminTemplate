<?php

class User_model extends CI_Model {

    public function getRoles($role_id=null)
    {
        if($role_id!=null)
        {
            $this->db->where('role_id',$role_id);
        }
        $q = $this->db->get('lu_roles');
        return $q->result();
    }
}