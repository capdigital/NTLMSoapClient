<?php
namespace Capdigital\NTLMSoapClient;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CapdigitalNTLMSoapClient extends Bundle
{
  public function say($toSay = "Nothing given")
    {
        return $toSay;
    }
}
