<?php

namespace Capdigital\NtlmSoapClient\Service;


class CapdigitalNtlmSoapClient
{
    // NTLM identification dans /config/backages/capdigital_ntlm_soap_client
    private $url;
    private $port;
    private $server;
    private $society;
    private $user;
    private $password;

    public function __construct($params)
    {
        $this->url = $params[0]["url"];
        $this->port = $params[0]["port"];
        $this->server = $params[0]["server"];
        $this->society = $params[0]["society"];
        $this->user = $params[0]["user"];
        $this->password = $params[0]["password"];
    }


    public function connect($wsName, $deleteSociety = null) {

        if(!defined('USERPWD'))
            {
                define('USERPWD', $this->user.':'.$this->password);
            }

        if(!defined('BASERURL'))
            {
                define('BASERURL', $this->url);
            }

        require_once(__DIR__.'/../Class/NTLMStream.php');
        require_once(__DIR__.'/../Class/NTLMSoapClient.php');

        stream_wrapper_unregister('http');
        stream_wrapper_register('http', 'NTLMStream') or die("Failed to register protocol");

        $baseUrl = $this->url.':'.$this->port.'/'.$this->server.'/WS';
        if($deleteSociety == false)
        {
            $baseUrl.='/'.$this->society;
        }
        $baseUrl.='/'.$wsName;


        $client = new \NTLMSoapClient($baseUrl);

        return $client;


    }


}