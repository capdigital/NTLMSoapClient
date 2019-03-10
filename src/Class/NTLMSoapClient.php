<?php
/**
 * Created by PhpStorm.
 * User: erichard
 * Date: 28/02/2019
 * Time: 10:22
 */


class NTLMSoapClient extends SoapClient
{
    function __doRequest($request, $location, $action, $version, $one_way = NULL) {

        $headers = array(
            'Method: POST',
            'Connection: Keep-Alive',
            'User-Agent: PHP-SOAP-CURL',
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: "'.$action.'"',
        );
        $this->__last_request_headers = $headers;
        $ch = curl_init($location);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
        curl_setopt($ch, CURLOPT_USERPWD, USERPWD);
        $response = curl_exec($ch);
        //echo("<br>response : $response");

        return $response;
    }



    function __getLastRequestHeaders() {
        return implode("\n", $this->__last_request_headers)."\n";
    }
}