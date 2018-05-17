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

    public function check_input($config_name,$file_name='form_validation')
    {

        $this->load->config($file_name); //file is found application/config
        if(empty($this->config->item($config_name) ) ) die('config name not definded');

        $this->form_validation->set_rules($this->config->item($config_name));

        if($this->input->is_ajax_request() ){
            if($this->form_validation->run()){
                return TRUE;
            }else{
                $input_error = array();

                foreach($this->config->item($config_name) as $cfg){
                    $input_error[] = array(
                        'error' => form_error($cfg['field']),
                        'type' => $cfg['type'],
                        'field' => $cfg['field']
                    );
                }
                $data['success'] = FALSE;
                $data['errors'] = $input_error;
                die(json_encode($data));

            }
        }else{
            return $this->form_validation->run();
        }

    }
}

class Admin_Controller extends My_Controller{

}