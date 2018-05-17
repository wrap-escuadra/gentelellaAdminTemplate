<?php

/**
 * Created by PhpStorm.
 * User: rafaelescuadra
 * Date: 16/05/2018
 * Time: 3:12 PM
 */
Class User extends Admin_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('user_model');


    }

    public function index()
    {
        $this->render('user/index');
    }

    public function add()
    {
        if($this->input->post())
        {
            if($this->check_input('add','user_validation') === TRUE)
            {
                $this->user_model->addUser($this->input->post());
                $this->session->set_flashdata('sysmsg','User successfully added.');

                if($this->input->is_ajax_request()){
                    $data['success'] = TRUE;
                    die(json_encode($data));
                }
                redirect(base_url('user/add'));

            }
        }
        $this->data['roles'] = $this->user_model->getRoles();
        $this->render('user/add');
    }
}