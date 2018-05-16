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

    }

    public function index()
    {
        $this->render('user/index');
//        $this->load->view('user');
    }

    public function add()
    {
        $this->render('user/add');
    }
}