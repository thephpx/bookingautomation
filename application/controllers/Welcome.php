<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('bookingautomation');
        $this->load->library('form_validation');
    }

    public function index($offset=0)
    {
        $this->data['page_title'] .= ' - Sub Account List';

        if(empty($this->data['accounts'])) {
            $this->data['accounts'] = $this->bookingautomation->getAccounts();
        }

        $this->data['rows'] = $this->data['accounts'][0]->subaccounts;

        $this->data['page_content'] = $this->load->view('default/subaccount/list', $this->data, true);
        $this->load->view('default/template',$this->data);

    }

    public function create()
    {
        $this->data['page_title'] .= ' - Create New Sub Account';

        if(isset($_POST) AND sizeof($_POST) > 0)
        {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            //$this->form_validation->set_rules('apiKey', 'API Key', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');
            $this->form_validation->set_rules('systemEmails', 'System Emails', 'required');
            $this->form_validation->set_rules('bookingEmails', 'Booking Emails', 'required');
            $this->form_validation->set_rules('bookingReplyto', 'Reply-To Emails', 'required');

            if($this->form_validation->run() != FALSE){
                $data = array();

                $fields = array('username','password','apiKey','email','role','systemEmails','bookingEmails','bookingReplyto');

                foreach($fields as $field){
                    $data[$field] = $this->input->post($field,true);
                }

                $response = $this->bookingautomation->createAccount($data);

                if(!empty($response->createAccount[0]) AND $response->createAccount[0]->ownerId > 0)
                {
                    $this->session->set_flashdata('page_message',array('type'=>'success','message'=>'Successfully created new sub-account.'));
                    redirect('/');
                }
            }
        }

        $this->data['page_content'] = $this->load->view('default/subaccount/create', $this->data, true);
        $this->load->view('default/template',$this->data);

    }

    public function update($id=0)
    {
        if(!is_int($id) AND $id <= 0) redirect('/');

        if(isset($_POST) AND sizeof($_POST) > 0) {
            $this->form_validation->set_rules('enabled', 'Status', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');

            if ($this->form_validation->run() != FALSE) {
                $data = array();
                $fields = array('enabled','role');

                foreach($fields as $field){
                    $data[$field] = $this->input->post($field,true);
                }

                $response = $this->bookingautomation->setAccount($id,$data);

                if(!empty($response->setAccount->subaccounts->{$id}) AND $response->setAccount->subaccounts->{$id} > 0)
                {
                    $this->session->set_flashdata('page_message',array('type'=>'success','message'=>'Successfully updated sub-account.'));
                    redirect('/');
                }
            }
        }

        $this->data['page_title'] .= ' - Change Sub Account Role';

        $this->data['row'] = $this->data['accounts'][0]->subaccounts->{$id};

        $this->data['page_content'] = $this->load->view('default/subaccount/modify', $this->data, true);
        $this->load->view('default/template',$this->data);

    }
}
