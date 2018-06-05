<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->config->load('site_config', TRUE);
        $this->load->library('bookingautomation');

        $this->data = array();
        $this->data['page_title'] = $this->config->item('site_config_page_title','site_config');

        $this->data['current_nav'] = $this->uri->segment(1,'');

        $this->data['accounts'] = $this->bookingautomation->getAccounts();

        if(is_object($this->data['accounts']) AND property_exists($this->data['accounts'], 'id'))
        {
            $this->data['account_id'] = $this->data['accounts']->id;
            $this->data['account_balance'] = $this->data['accounts']->balance;
            $this->data['account_charge'] = $this->data['accounts']->charge;
        }

        $page_message = $this->session->flashdata('page_message');

        if($page_message)
        {
            $this->data['page_message_type'] = $page_message['type'];
            $this->data['page_message'] = $page_message['message'];
        }

    }

}