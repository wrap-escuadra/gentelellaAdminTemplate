<?php
/**
 * Created by PhpStorm.
 * User: rafaelescuadra
 * Date: 17/05/2018
 * Time: 3:03 PM
 */
$config['add'] = array(
    array(
      'field' => 'username',
      'label' => 'username',
      'rules' => 'required|max_length[70]|is_unique[mt_users.username]',
      'type' => 'input',
    ),
    array(
        'field' => 'fname',
        'label' => 'first name',
        'rules' => 'required|alpha_space|max_length[70]',
        'type' => 'input',
    ),
    array(
        'field' => 'lname',
        'label' => 'last name',
        'rules' => 'required|max_length[70]',
        'type' => 'input',
    ),
    array(
        'field' => 'role',
        'label' => 'user type',
        'rules' => 'required',
        'type' => 'select',
    ),
    array(
        'field' => 'email',
        'label' => 'email',
        'rules' => 'valid_email',
        'type' => 'input',
    ),
    array(
        'field' => 'password',
        'label' => 'password',
        'rules' => 'required|max_length[20]',
        'type' => 'input',
    ),
    array(
        'field' => 'repassword',
        'label' => 'confirm password',
        'rules' => 'required|max_length[20]|matches[password]',
        'type' => 'input',
    ),

);