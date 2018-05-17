<?php
/**
 * Created by PhpStorm.
 * User: rafaelescuadra
 * Date: 16/05/2018
 * Time: 12:25 PM
 */

class My_Controller extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->data = array();

    }


    public function  render($view)
    {
        $this->data['view_content'] = $this->load->view($view,$this->data,true);
        $this->load->view('templates/admin_layout',$this->data);
    }

}

class Admin_Controller extends My_Controller{

}