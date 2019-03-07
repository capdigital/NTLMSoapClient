<?php
namespace Capdigital\NtlmSoapClient;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CapdigitalNtlmSoapClient extends Bundle
{
        

    public function connect($baseURL)
    {
    require_once("Class\NTLMStream.php");

    require_once("Class\NTLMSoapClient.php");

    stream_wrapper_unregister('http');

    stream_wrapper_register('http', 'NTLMStream') or die("Failed to register protocol");
            
            
    $client = new \NtlmSoapClient($baseURL);
            
            

        // Find the first Company in the Companies
        $result = $client->Companies();
        $companies = $result->return_value;
        echo "Companies:<br>";
        if (is_array($companies)) {
            foreach($companies as $company) {
                echo "$company<br>";
            }
            $cur = $companies[0];
        }
        else {
            echo "$companies<br>";
            $cur = $companies;
        }
    }


    public function say($toSay = "Nothing given")
    {
        return $toSay;
    }



}
