<?php

class Bookingautomation{

    protected $guzzle;
    protected $url;
    protected $secret;

    public function __construct()
    {
        $this->url = 'https://manage.bookingautomation.com/api';
        $this->secret = 'F12D1A4B243FFCC5';
        $this->guzzle = new \GuzzleHttp\Client();
    }

    private function request($method="POST",$endpoint, $data=array())
    {
        $ch = curl_init($endpoint);

        if($method == "POST") {
            $payload = json_encode($data);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json_result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($json_result);

        if(empty($result)) $result = array();

        return $result;
    }

    public function getAccounts()
    {
        $endpoint = $this->url . '/json/getAccount';

        $data = array();
        $data['authentication'] = array('apiKey'=>$this->secret);

        return $this->request("POST",$endpoint, $data);
    }

    public function createAccount($data=array())
    {
        $endpoint = $this->url . '/json/createAccount';

        $data['apiKey'] = $this->secret;

        $postdata = array();
        $postdata['authentication'] = array('apiKey'=>$this->secret);
        $postdata['createAccount'][] = $data;

        return $this->request("POST",$endpoint, $postdata, true);
    }

    public function setAccount($id=0,$data=array())
    {
        $endpoint = $this->url . '/json/setAccount';
        $data['action'] = 'modify';

        $postdata = array();
        $postdata['authentication'] = array('apiKey'=>$this->secret);
        $postdata['setAccount'] = array("action"=>"modify","subaccounts"=>array("$id"=>$data));

        return $this->request("POST",$endpoint, $postdata, true);
    }



}